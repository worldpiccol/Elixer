<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Mail\WithdrawConfirm;
use Auth;
use Mail;

class WithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $withdrawals = Transaction::where('type', 'withdraw')->orderBy('created_at', 'desc')->get();
        $withdrawals_pending = Transaction::where('type', 'withdraw')->where('status', 'processing')->orderBy('created_at', 'desc')->get();
        $withdrawals_complete = Transaction::where('type', 'withdraw')->where('status', 'completed')->orderBy('created_at', 'desc')->get();


        return view('admin.withdraw.index', compact('withdrawals', 'withdrawals_pending', 'withdrawals_complete'));
    }

    public function approve(Transaction $transaction)
    {
        $transaction->update([
                'status' => 'completed',
                'completed_at' => now(),
                'completed_by' => json_encode(Auth::user()),
        ]);

        $data = array();
        $data['amount'] = round($transaction->total, 6).' '.$transaction->currency;
        $data['tnx_id'] = $transaction->tnx_id;
        $data['time'] = $transaction->completed_at;
        $data['wallet'] = $transaction->wd_wallet->address;

        Mail::to($transaction->user->email)->send(new WithdrawConfirm($data, $transaction->user));

         return redirect()->back()->with('success', 'Withdrawal confirmed successfully.');
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
