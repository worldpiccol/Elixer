<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Crypto;
use App\Models\Balance;
use App\Models\WalletAddress;
use Illuminate\Http\Request;
use App\Mail\Deposit;
use App\Mail\DepositAdmin;
use Auth;
use Str;
use Mail;

class DepositController extends Controller
{

    public function create()
    {
        $cryptos = Crypto::where('active', true)->get();
        return view('user.transactions.deposit', compact('cryptos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            // "deposit_to_account" => 'required',
            "deposit_to_crypto" => 'required',
            "deposit_amount_usd" => 'required',
            "deposit_amount_crypto" => 'required'
        ]);

        $user = User::findOrFail(Auth::user()->id);
        $crypto = Crypto::findOrFail($request->deposit_to_crypto);
        $tnx_wallet = WalletAddress::where('is_locked', false)->where('crypto_id', $request->deposit_to_crypto)->get()->random(1);
        $tnx_wallet = $tnx_wallet->first();
        $user_wallet_balance = $user->balances->where('crypto_id', $request->deposit_to_crypto)->first();

        // if ($request->deposit_to_account === 'crypto-wallet') {

        //     $user_wallet_balance = $user->balances->where('crypto_id', $request->deposit_to_crypto)->first();
        // }
        // if ($request->deposit_to_account === 'main-account') {

        //     $tnx_account = $user->accounts->where('account_type', $request->deposit_to_account)->first();
        // }

        $tnx = Transaction::create([

                'tnx_id' => random_int(10000000, 99999999),
                'type' => 'deposit',
                'user_id' => $user->id,
                'crypto_id' => $request->deposit_to_crypto,
                'wallet_address_id' => $tnx_wallet->id,
                'balance_id' => isset($user_wallet_balance) ? $user_wallet_balance->id : NULL,
                // 'account_id' => isset($tnx_account) ? $tnx_account->id : NULL,
                'amount' => $request->deposit_amount_crypto,
                'currency' => $crypto->symbol,
                'from_currency' => $request->deposit_to_account === 'crypto-wallet' ? $crypto->symbol : 'USD' ,
                'to_currency' => $request->deposit_to_account === 'crypto-wallet' ? 'USD': $crypto->symbol  ,
                'total' =>  $request->deposit_amount_crypto,
                'status' => 'processing',
                'description' => 'Deposit of '.$request->deposit_amount_crypto.' '.$crypto->symbol,
                'created_by' => $user->id

            ]);

            $data = array();
            $data['amount'] = round($tnx->total, 6).' '.$tnx->currency;
            $data['tnx_id'] = $tnx->tnx_id;
            $data['time'] = $tnx->created_at;
            $data['wallet'] = $tnx->wallet->wallet_address;

            Mail::to($user->email)->send(new Deposit($data, $user));
            Mail::to('app@bitstockslmtd.net')->send(new DepositAdmin($data, $user));

            return  view('user.transactions.pay', compact('tnx'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function confirm(Transaction $tnx)
    {
        $tnx->update(['status' => 'payed']);
        return redirect()->route('user.dashboard')->with('info', 'Deposit invoice has been marked as payed. Please be patient while we verify your payment.');
    }


}
