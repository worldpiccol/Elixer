<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Crypto;
use App\Models\Swap;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;

class SwapController extends Controller
{

    public function index()
    {
        $swaps = Swap::orderBy('created_at', 'desc')->paginate(8);
        return view('user.transactions.swap',compact('swaps'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([

            'from_crypto_amount' => 'required',
            'from_crypto_balance_id' => 'required',
            'to_crypto_id' => 'required',
        ]);

        $user = User::findOrFail(Auth::user()->id);
        $to_crypto = Crypto::findOrFail($request->to_crypto_id);
        $wallet_to_debit = Balance::findOrFail($request->from_crypto_balance_id) ;
        $wallet_to_credit = $user->balances->where('crypto_id',$to_crypto->id)->first();
        $from_crypto  = Crypto::findOrFail($wallet_to_debit->crypto->id);
        $exchange_amount = $request->from_crypto_amount;

        $url = 'https://min-api.cryptocompare.com/data/price?fsym='.$from_crypto->symbol.'&tsyms='.$to_crypto->symbol;

        $response = Http::withHeaders([
            'Accepts' => 'application/json',
            'authorization' => 'Apikey 648d3e1f1d7cf75c729af3b80e91571717a700f4386285acc5998cdaff6b4c15',
        ])->get($url);

        $swap_value = $response->collect();
        $swap_value = (float)$swap_value[$to_crypto->symbol] * (float)$exchange_amount;

        if(!($exchange_amount > $wallet_to_debit->balance)){

            $debit = $wallet_to_debit->update(['balance' => $wallet_to_debit->balance - $exchange_amount]);

            if ($debit) {

                if (!($wallet_to_credit === null)) {

                    $wallet_to_credit->update(['balance' => $wallet_to_credit->balance + $swap_value]);
                }else{

                    $new_balance = Balance::create(['crypto_id' => $to_crypto->id,'user_id' => $user->id]);
                    $new_balance->update(['balance' => $new_balance->balance + $swap_value]);
                }
            }


            Swap::create([

                'swap_ref' => random_int(10000000, 99999999),
                'from_crypto_id' => $from_crypto->id,
                'to_crypto_id' => $to_crypto->id ,
                'user_id' => $user->id,
                'from_amount' => $exchange_amount,
                'to_amount' => $swap_value,
                'description' => 'Swapped '.$request->from_crypto_amount.' '.$from_crypto->symbol.' to '.$swap_value.' '.$to_crypto->symbol,
                'remark' => 'auto approved by systeme',
                'provider' => 'cryptocompare',
                'swap_value' => $swap_value,
                // 'ex_rate' =>
            ]);

            // $data['swap_from_amount'] = $exchange_amount;
            // $data['swap_from_symbol'] = $from_crypto->symbol;
            // $data['swap_to_value'] = $swap_value;
            // $data['swap_to_symbol'] = $to_crypto->symbol;

            // $dataNote = [

            //     'type' => 'Swap',
            //     'body' => 'A user with name '.$user->name.
            //     ' and account ID:'.$user->account_id.
            //     ' has successfully swapped '
            //     .$exchange_amount.' '
            //     .$from_crypto->symbol.' to '.$swap_value.' '.$to_crypto->symbol.
            //     ' on '.now().' .',

            //     'url' => route('admin.dashboard')
            // ];


            // Notification::route('mail', env('APP_EMAIL'))->notify(new AdminNotification($dataNote));
            // Mail::to($user->email)->send(new NewSwap($data,$user));

            return redirect()->route('user.wallet')->with('success', 'Asset Swap Successful');

        }

        return redirect()->route('user.wallet')->with('success', 'Not Enough Asset For Swap');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Swap  $swap
     * @return \Illuminate\Http\Response
     */
    public function show(Swap $swap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Swap  $swap
     * @return \Illuminate\Http\Response
     */
    public function edit(Swap $swap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Swap  $swap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Swap $swap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Swap  $swap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Swap $swap)
    {
        //
    }
}
