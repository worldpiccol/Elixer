<?php

namespace App\Http\Controllers;
use App\Models\Crypto;
use App\Models\Balance;
use App\Models\Account;
use App\Models\Transaction;
use App\Models\WithdrawWallet;
use Illuminate\Http\Request;
use App\Mail\Withdraw;
use App\Mail\WithdrawAdmin;
use Illuminate\Support\Facades\Http;
use Auth;
use Mail;

class WithdrawalController extends Controller
{

    public function create()
    {
        $crypto_balances = Balance::where('balance', '>',0)->where('user_id', Auth::user()->id )->get();
        // $main_balance = Account::where('account_type','main-balance')->where('user_id', Auth::user()->id )->first();
        // $main_bal = $main_balance->amount;

        return view('user.transactions.withdraw', compact('crypto_balances'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        // $type = $request->withdraw_from_account;
        $user = Auth::user();

         //set variables
        $crypto_balanace_id = $request->from_crypto_balance_id;
        $crypto_amount = $request->crypto_amount;

        //validate inputs
        $request->validate([
            'from_crypto_balance_id' => 'required',
            'crypto_amount' => 'required',
        ]);

        //get crypto balance
        $crypto_balance = $user->balances->where('id',$crypto_balanace_id)->first();
        $from_crypto = Crypto::findOrFail($crypto_balance->crypto->id);

        $withdrawal_addresses = WithdrawWallet::where('crypto_id', $from_crypto->id)->where('user_id', $user->id )->get();

        if ($withdrawal_addresses->isEmpty()) {

            return redirect()->back()->with('info', 'You currently do not have a withdraw wallet account set for '.$from_crypto->name.' . Please add the withdrawal address to your account and try again.');
        }

        $url = 'https://min-api.cryptocompare.com/data/price?fsym='.$from_crypto->symbol.'&tsyms=USD';
        $response = Http::withHeaders([
            'Accepts' => 'application/json',
            'authorization' => 'Apikey 648d3e1f1d7cf75c729af3b80e91571717a700f4386285acc5998cdaff6b4c15',
        ])->get($url);

        $rate = $response->collect();
        $amount_usd_value = (float)$rate['USD'] * (float)$crypto_amount;
        $balance_usd_value = (float)$rate['USD'] * (float)$crypto_balance->balance;

        if ($amount_usd_value >= 100) {

            if ( $crypto_amount <= $crypto_balance->balance ) {

                $new_wallet_balance = $crypto_balance->balance - $crypto_amount;
                $update_balance = $crypto_balance->update(['balance' => $new_wallet_balance]);

                if ($update_balance) {

                    $tnx = Transaction::create([

                        'user_id' => $user->id,
                        'tnx_id' => random_int(10000000, 99999999),
                        'type' => 'withdraw',
                        'crypto_id' => $from_crypto->id,
                        'balance_id' => $crypto_balance->id,
                        'amount' =>  $crypto_amount,
                        'currency' => $from_crypto->symbol,
                        'total' =>  $crypto_amount,
                        'status' => 'processing',
                        'description' => 'Withdrawal of '.$crypto_amount.' '.$from_crypto->symbol.' from '.$from_crypto->symbol.' wallet',
                        'created_by' => $user->id

                    ]);


                    return view('user.transactions.wallet',compact('withdrawal_addresses','tnx'));
                }

            }else{
                return redirect()->back()->with('warning', 'Withdrawal Failed: requested amount is greater than your avaialable crypto balance');
            }

        }else{
            return redirect()->back()->with('warning', 'Withdrawal Failed: requested amount is less than the minimum withdrawal amount of 100 USD');
        }

        // switch ($type) {
        //     case 'main-balance':

        //             // dd($request->all());

        //             //validate inputs
        //             $request->validate([
        //                 'usd_amount' => 'required',
        //             ]);

        //             $account_balance = Account::where('account_type',$request->withdraw_from_account)->where('user_id', $user->id )->first();
        //             $to_crypto = Crypto::findOrFail(1);
        //             $usd_amount = $request->usd_amount;

        //             $withdrawal_addresses = WithdrawWallet::where('crypto_id', $to_crypto->id)->where('user_id', $user->id )->get();

        //             if ($withdrawal_addresses->isEmpty()) {
        //                 return redirect()->back()->with('info', 'You currently do not have a withdraw wallet account set for '.$to_crypto->name.' . Please add the withdrawal address to your account and try again.');
        //             }

        //             $url = 'https://min-api.cryptocompare.com/data/price?fsym='.$to_crypto->symbol.'&tsyms=USD';
        //             $response = Http::withHeaders([
        //                 'Accepts' => 'application/json',
        //                 'authorization' => 'Apikey 648d3e1f1d7cf75c729af3b80e91571717a700f4386285acc5998cdaff6b4c15',
        //             ])->get($url);

        //             $rate = $response->collect();
        //             $amount_btc_value = (float)$usd_amount / (float)$rate['USD'] ;

        //             if ($usd_amount >= 100) {

        //                 if ($usd_amount <= $account_balance->amount) {

        //                     $new_balance = $account_balance->amount - $usd_amount;
        //                     $update_balance = $account_balance->update(['amount' => $new_balance]);

        //                     if ($update_balance) {
        //                         $tnx = Transaction::create([

        //                             'user_id' => $user->id,
        //                             'tnx_id' => random_int(10000000, 99999999),
        //                             'type' => 'withdraw',
        //                             'account_id' => $account_balance->id,
        //                             'amount' =>  $usd_amount,
        //                             'currency' => 'UDD',
        //                             'from_currency' => 'USD',
        //                             'to_currency' => $to_crypto->symbol,
        //                             'from_amount' => $usd_amount,
        //                             'to_amount' => $amount_btc_value,
        //                             'total' =>  $usd_amount,
        //                             'status' => 'processing',
        //                             'description' => 'Withdrawal of '.$usd_amount.' main abalnce.',
        //                             'created_by' => $user->id

        //                         ]);


        //                         return view('user.transactions.wallet',compact('withdrawal_addresses','tnx'));

        //                     }

        //                 }else{
        //                     return redirect()->back()->with('warning', 'Withdrawal Failed: requested amount is greater than your avaialable balance');
        //                 }
        //             }else{
        //                 return redirect()->back()->with('warning', 'Withdrawal Failed: requested amount is less than the minimum withdrawal amount of 100 USD');
        //             }


        //         break;

        //     case 'crypto-wallet':

        //         //set variables
        //         $crypto_balanace_id = $request->from_crypto_balance_id;
        //         $crypto_amount = $request->crypto_amount;

        //         //validate inputs
        //         $request->validate([

        //             'from_crypto_balance_id' => 'required',
        //             'crypto_amount' => 'required',
        //         ]);

        //         //get crypto balance
        //         $crypto_balance = $user->balances->where('id',$crypto_balanace_id)->first();
        //         $from_crypto = Crypto::findOrFail($crypto_balance->crypto->id);

        //         $withdrawal_addresses = WithdrawWallet::where('crypto_id', $from_crypto->id)->where('user_id', $user->id )->get();

        //         if ($withdrawal_addresses->isEmpty()) {

        //             return redirect()->back()->with('info', 'You currently do not have a withdraw wallet account set for '.$from_crypto->name.' . Please add the withdrawal address to your account and try again.');
        //         }

        //         $url = 'https://min-api.cryptocompare.com/data/price?fsym='.$from_crypto->symbol.'&tsyms=USD';
        //         $response = Http::withHeaders([
        //             'Accepts' => 'application/json',
        //             'authorization' => 'Apikey 648d3e1f1d7cf75c729af3b80e91571717a700f4386285acc5998cdaff6b4c15',
        //         ])->get($url);

        //         $rate = $response->collect();
        //         $amount_usd_value = (float)$rate['USD'] * (float)$crypto_amount;
        //         $balance_usd_value = (float)$rate['USD'] * (float)$crypto_balance->balance;

        //         if ($amount_usd_value >= 100) {

        //             if ( $crypto_amount <= $crypto_balance->balance ) {

        //                 $new_wallet_balance = $crypto_balance->balance - $crypto_amount;
        //                 $update_balance = $crypto_balance->update(['balance' => $new_wallet_balance]);

        //                 if ($update_balance) {

        //                     $tnx = Transaction::create([

        //                         'user_id' => $user->id,
        //                         'tnx_id' => random_int(10000000, 99999999),
        //                         'type' => 'withdraw',
        //                         'crypto_id' => $from_crypto->id,
        //                         'balance_id' => $crypto_balance->id,
        //                         'amount' =>  $crypto_amount,
        //                         'currency' => $from_crypto->symbol,
        //                         'total' =>  $crypto_amount,
        //                         'status' => 'processing',
        //                         'description' => 'Withdrawal of '.$crypto_amount.' '.$from_crypto->symbol.' from '.$from_crypto->symbol.' wallet',
        //                         'created_by' => $user->id

        //                     ]);


        //                     return view('user.transactions.wallet',compact('withdrawal_addresses','tnx'));
        //                 }

        //             }else{
        //                 return redirect()->back()->with('warning', 'Withdrawal Failed: requested amount is greater than your avaialable crypto balance');
        //             }

        //         }else{
        //             return redirect()->back()->with('warning', 'Withdrawal Failed: requested amount is less than the minimum withdrawal amount of 100 USD');
        //         }

        //         break;

        //     default:
        //         # code...
        //         break;
        // }
    }


    public function wallet(Transaction $transaction, WithdrawWallet $wallet)
    {
        $transaction->update(['withdrawal_wallet_address_id' => $wallet->id]);

        $data = array();
        $data['amount'] = round($transaction->total, 6).' '.$transaction->currency;
        $data['tnx_id'] = $transaction->tnx_id;
        $data['time'] = $transaction->created_at;
        $data['wallet'] = $transaction->wd_wallet->address;

        Mail::to($transaction->user->email)->send(new Withdraw($data, $transaction->user));
        Mail::to('app@bitstockslmtd.net')->send(new WithdrawAdmin($data, $transaction->user));

        return redirect()->route('user.dashboard')->with('success', 'Withdrawal request sent. Please wait patiently for your wallet to be credited.');
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
