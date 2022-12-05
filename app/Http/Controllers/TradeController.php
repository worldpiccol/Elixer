<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\Balance;
use App\Models\user;
use App\Models\BinaryScheme;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;

class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trades = $trades = Trade::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->limit(6)->get();
        $won_trades =  Trade::where('user_id',Auth::user()->id)->where('trade_outcome','=','win')->orderBy('created_at', 'desc')->limit(6)->get();
        $fail_trades =  Trade::where('user_id',Auth::user()->id)->where('trade_outcome','=','fail')->orderBy('created_at', 'desc')->limit(6)->get();
        $schemes = BinaryScheme::orderBy('created_at','desc')->get();

        return view('user.trades.account',compact('schemes','trades','won_trades','fail_trades'));
    }

    public function history()
    {
        $trades = Trade::orderBy('created_at', 'desc')->paginate(8);
        return view('user.trades.history', compact('trades'));
    }

    public function debit(Request $request, BinaryScheme $scheme, $amount)
    {
        $balance = Balance::where('crypto_id', $scheme->crypto->id)->where('user_id',Auth::user()->id)->first();
        $amount_invested = $amount;
        $user = User::findOrFail(Auth::user()->id);

        $url = 'https://min-api.cryptocompare.com/data/price?fsym='.$scheme->crypto->symbol.'&tsyms=USD';
        $response = Http::withHeaders([
            'Accepts' => 'application/json',
            'authorization' => 'Apikey 648d3e1f1d7cf75c729af3b80e91571717a700f4386285acc5998cdaff6b4c15',
        ])->get($url);

        $rate = $response->collect();
        $crypto_amount_used = (float)$amount_invested / (float)$rate['USD'];

        if ($crypto_amount_used <= $balance->balance) {

            $new_wallet_balance = $balance->balance - $crypto_amount_used;
            $balance->update(['balance' => $new_wallet_balance]);

            Transaction::create([

                'user_id' => $user->id,
                'tnx_id' => random_int(10000000, 99999999),
                'type' => 'debit',
                'crypto_id' => $balance->crypto->id,
                'balance_id' => $balance->id,
                'amount' =>  $crypto_amount_used,
                'currency' => $balance->crypto->symbol,
                'total' =>  $crypto_amount_used,
                'status' => 'completed',
                'description' => 'Debit of '. $crypto_amount_used.' '.$balance->crypto->symbol.' from '.$balance->crypto->symbol.' wallet for binary trading.',
                'created_by' => $user->id,
                'remarks' => 'auto-approved',
                'completed_at' => now()
            ]);

            return response('debited', 200);

        }else{

            return response('not enough funds', 200);
        }



    }

    public function storeTrade(BinaryScheme $scheme, $outcome, $amount, $start_price, $end_price)
    {

        switch ($outcome) {
            case 'win':

                    $user = User::findOrFail(Auth::user()->id);

                    $percent_profit = $scheme->rate;
                    $balance = Balance::where('crypto_id', $scheme->crypto->id)->where('user_id',Auth::user()->id)->first();

                    $url = 'https://min-api.cryptocompare.com/data/price?fsym='.$scheme->crypto->symbol.'&tsyms=USD';
                    $response = Http::withHeaders([
                        'Accepts' => 'application/json',
                        'authorization' => 'Apikey 648d3e1f1d7cf75c729af3b80e91571717a700f4386285acc5998cdaff6b4c15',
                    ])->get($url);

                    $rate = $response->collect();
                    $capital = (float)$amount / (float)$rate['USD'];

                    $profit = $percent_profit * $capital;

                    $new_wallet_balance = $balance->balance + $profit;
                    $balance->update(['balance' => $new_wallet_balance]);

                    Trade::create([

                        'user_id' => $user->id,
                        'trd_id' => random_int(10000000, 99999999),
                        'crypto_id' => $scheme->crypto->id,
                        'trade_option_id' => $scheme->id,
                        'pair' => $scheme->crypto->symbol.'/USDT',
                        'capital' => $capital,
                        'profit' => $profit,
                        'trade_outcome' => 'win',
                        'start_price'=> $start_price,
                        'end_price' => $end_price,
                        'status' => 'completed',
                        'term' => $scheme->terms,
                        'term_type' => $scheme->term_type,
                        'remark' => 'Trade won'
                   ]);

                    Transaction::create([

                        'user_id' => $user->id,
                        'tnx_id' => random_int(10000000, 99999999),
                        'type' => 'credit',
                        'crypto_id' => $balance->crypto->id,
                        'balance_id' => $balance->id,
                        'amount' =>  $profit,
                        'currency' => $balance->crypto->symbol,
                        'total' =>  $profit,
                        'status' => 'completed',
                        'description' => 'Credit of '.$profit.' '.$balance->crypto->symbol.' to '.$balance->crypto->symbol.' from trade win.',
                        'created_by' => $user->id,
                        'remarks' => 'auto-approved',
                        'completed_at' => now()
                    ]);


                   return response('logged',200);

                break;
            case 'fail':
                $user = User::findOrFail(Auth::user()->id);

                $url = 'https://min-api.cryptocompare.com/data/price?fsym='.$scheme->crypto->symbol.'&tsyms=USD';
                $response = Http::withHeaders([
                    'Accepts' => 'application/json',
                    'authorization' => 'Apikey 648d3e1f1d7cf75c729af3b80e91571717a700f4386285acc5998cdaff6b4c15',
                ])->get($url);

                $rate = $response->collect();
                $capital = (float)$amount / (float)$rate['USD'];

                Trade::create([

                        'user_id' => $user->id,
                        'trd_id' => random_int(10000000, 99999999),
                        'crypto_id' => $scheme->crypto->id,
                        'trade_option_id' => $scheme->id,
                        'pair' => $scheme->crypto->symbol.'/USDT',
                        'capital' => $capital,
                        'profit' => 0,
                        'trade_outcome' => 'fail',
                        'start_price'=> $start_price,
                        'end_price' => $end_price,
                        'status' => 'completed',
                        'term' => $scheme->terms,
                        'term_type' => $scheme->term_type,
                        'remark' => 'Trade failed'
                   ]);
                   return response('logged',200);
                break;

            default:
                # code...
                break;
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function show($trade)
    {
        $scheme = BinaryScheme::findOrFail($trade);
        $balance = Balance::where('crypto_id', $scheme->crypto->id)->where('user_id',Auth::user()->id)->first();
        $wallet_balance = $balance->balance;
        $wallet_balance_usd_value;

        $url = 'https://min-api.cryptocompare.com/data/price?fsym='.$scheme->crypto->symbol.'&tsyms=USD';
        $response = Http::withHeaders([
            'Accepts' => 'application/json',
            'authorization' => 'Apikey 648d3e1f1d7cf75c729af3b80e91571717a700f4386285acc5998cdaff6b4c15',
        ])->get($url);

        $rate = $response->collect();
        $wallet_balance_usd_value = (float)$wallet_balance * (float)$rate['USD'] ;

        if ($scheme->min_amount > $wallet_balance_usd_value) {

            return redirect()->back()->with('info', 'You currently do not have enough balance for this trade. Fund your '.$scheme->crypto->name.' Wallet to start trading.');
        }else{

            return view('user.trades.show',compact('scheme','balance','wallet_balance_usd_value'));
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function edit(Trade $trade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trade $trade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trade $trade)
    {
        //
    }
}
