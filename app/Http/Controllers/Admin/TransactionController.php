<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Balance;
use App\Models\User;
use App\Models\Crypto;
use App\Models\Swap;
use Illuminate\Http\Request;
use Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trans = Transaction::where('type','!=', 'bonus')->orderBy('created_at', 'desc')->get();
        return view('admin.transactions.index', compact('trans'));
    }

    public function approve(Transaction $transaction)
    {

        switch ($transaction->type) {
            case 'deposit':

                    if ($transaction->status !== 'completed') {

                    $user = User::findOrFail($transaction->user_id);
                    $referred_user = User::where('referral_code', $user->refer_by)->first();
                    $user_completed_tnx = $user->transactions->where('type', 'deposit')->where('status', 'completed');

                    $refer_bonus = 0;

                    if ($user_completed_tnx->count()  == 0) {

                        $refer_bonus = (5 / 100) * $transaction->total;

                    }

                    $user_balance = Balance::where('user_id', $user->id)->where('crypto_id', $transaction->crypto_id)->first();

                    $user_balance->update(['balance' => $user_balance->balance + $transaction->total]);

                    $transaction->update([
                        'status' => 'completed',
                        'completed_at' => now(),
                        'completed_by' => json_encode(Auth::user()),
                    ]);

                    if ($refer_bonus > 0) {

                        $referr_user_balance = Balance::where('user_id', $referred_user->id)->where('crypto_id', $transaction->crypto_id)->first();

                        $referr_user_balance->update(['balance' =>  $referr_user_balance->balance + $refer_bonus]);

                        $tnx = Transaction::create([

                            'tnx_id' => random_int(10000000, 99999999),
                            'type' => 'bonus',
                            'user_id' => $referred_user->id,
                            'crypto_id' => $transaction->crypto_id,
                            'amount' => $refer_bonus,
                            'currency' => $transaction->symbol,
                            'total' =>  $refer_bonus,
                            'status' => 'completed',
                            'description' => 'Refferal Bonus from referring '.$referred_user->name,
                            'created_by' => $referred_user->id,
                            'completed_at' => now()

                        ]);

                    }

                    return redirect()->back()->with('success', 'Deposit approved successfully.');
                }
                break;
            case 'withdraw':

                    $transaction->update([
                            'status' => 'completed',
                            'completed_at' => now(),
                            'completed_by' => json_encode(Auth::user()),
                    ]);

                    return redirect()->back()->with('success', 'Withdrawal confirmed successfully.');
                 break;
            default:

                break;
        }

    }

    public function create()
    {
        $users = User::where('is_active', true)->where('is_admin', false)->get();
        $cryptos = Crypto::where('active', true)->get();

        return view('admin.transactions.create', compact('users', 'cryptos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::findOrFail($request->user);
        $crypto = Crypto::findOrFail($request->crypto);
        $user_crypto_balance = $user->balances->where('crypto_id', $crypto->id)->first();

        switch ($request->type) {
            case 'credit':

                    if ($user_crypto_balance == null) {

                        $credit_balance =  Balance::create([
                                                'crypto_id' => $crypto->id,
                                                'balance_ref' => random_int(10000000, 99999999),
                                                'user_id' => $user->id,
                                            ]);
                    }else{

                        $credit_balance = $user_crypto_balance;
                    }

                        $credit_balance->update(['balance' => $credit_balance->balance + $request->amount]);

                        $tnx = Transaction::create([

                            'tnx_id' => random_int(10000000, 99999999),
                            'type' => 'credit',
                            'user_id' => $user->id,
                            'crypto_id' => $crypto->id,
                            'balance_id' => $credit_balance->id,
                            'amount' => $request->amount,
                            'currency' => $crypto->symbol,
                            'total' =>  $request->amount,
                            'status' => 'completed',
                            'description' => $request->description,
                            'created_by' => Auth::user()->id,
                            'completed_at' => now(),
                            'completed_by' => json_encode(Auth::user()),

                        ]);

                        return redirect()->back()->with('success', 'User Account Credited.');
                break;

            case 'debit':
                        if (!$user_crypto_balance->balance < $request->amount) {

                            $user_crypto_balance->update(['balance' => $user_crypto_balance->balance - $request->amount]);

                            $tnx = Transaction::create([

                            'tnx_id' => random_int(10000000, 99999999),
                            'type' => 'debit',
                            'user_id' => $user->id,
                            'crypto_id' => $crypto->id,
                            'balance_id' => $user_crypto_balance->id,
                            'amount' => $request->amount,
                            'currency' => $crypto->symbol,
                            'total' =>  $request->amount,
                            'status' => 'completed',
                            'description' => $request->description,
                            'created_by' => Auth::user()->id,
                            'completed_at' => now(),
                            'completed_by' => json_encode(Auth::user()),

                            ]);

                            return redirect()->back()->with('success', 'User Account Debited.');
                        }

                        return redirect()->back()->with('warning', 'This user do not have enough balance to debit. Enter a less amount.');
                 break;
            default:
                # code...
                break;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function swaps()
    {
        $swaps = Swap::orderBy('created_at', 'desc')->get();
        return view('admin.transactions.swap' , compact('swaps'));
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
