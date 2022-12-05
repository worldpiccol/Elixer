<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Balance;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\DepositConfirm;
use Mail;
use Auth;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deposits = Transaction::where('type', 'deposit')->orderBy('created_at', 'desc')->get();
        $deposits_pending = Transaction::where('type', 'deposit')->where('status', 'processing')->orderBy('created_at', 'desc')->get();
        $deposits_complete = Transaction::where('type', 'deposit')->where('status', 'completed')->orderBy('created_at', 'desc')->get();


        return view('admin.deposit.index', compact('deposits', 'deposits_pending', 'deposits_complete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function approve(Transaction $transaction)
    {

        if ($transaction->status !== 'completed') {

            $user = User::findOrFail($transaction->user_id);
            $user_completed_tnx = $user->transactions->where('type', 'deposit')->where('status', 'completed');

            if ( $user->refer_by == null) {
               $referred_user = null;
            }else{
                $referred_user = User::where('referral_code', $user->refer_by)->first();

            }

            if ($referred_user != null) {

                $refer_bonus = 0;

                if ($user_completed_tnx->count()  == 0) {

                    $refer_bonus = (5 / 100) * $transaction->total;

                }

                if ($refer_bonus > 0) {

                    $referr_user_balance = Balance::where('user_id', $referred_user->id)->where('crypto_id', $transaction->crypto_id)->first();

                    $referr_user_balance->update(['balance' =>  $referr_user_balance->balance + $refer_bonus]);

                    $tnx = Transaction::create([

                        'tnx_id' => random_int(10000000, 99999999),
                        'type' => 'bonus',
                        'user_id' => $referred_user->id,
                        'crypto_id' => $transaction->crypto_id,
                        'amount' => $refer_bonus,
                        'currency' => $transaction->currency,
                        'total' =>  $refer_bonus,
                        'status' => 'completed',
                        'description' => 'Refferal Bonus from referring '.$user->name,
                        'created_by' => $referred_user->id,
                        'completed_at' => now()

                    ]);

                }


            }


            $user_balance = Balance::where('user_id', $user->id)->where('crypto_id', $transaction->crypto_id)->first();

            $user_balance->update(['balance' => $user_balance->balance + $transaction->total]);

            $transaction->update([
                'status' => 'completed',
                'completed_at' => now(),
                'completed_by' => json_encode(Auth::user()),
            ]);

            $data = array();
            $data['amount'] = round($transaction->total, 6).' '.$transaction->currency;
            $data['tnx_id'] = $transaction->tnx_id;
            $data['time'] = $transaction->completed_at;

            Mail::to($transaction->user->email)->send(new DepositConfirm($data, $transaction->user));


            return redirect()->back()->with('success', 'Deposit approved successfully.');
        }



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
