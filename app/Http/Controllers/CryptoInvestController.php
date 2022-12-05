<?php

namespace App\Http\Controllers;

use App\Models\InvestmentScheme;
use App\Models\Balance;
use App\Models\User;
use App\Models\Crypto;
use App\Models\IvProfit;
use App\Models\Investment;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Mail\Invest;
use App\Mail\InvestAdmin;
use Carbon\Carbon;
use Auth;
use Mail;

class CryptoInvestController extends Controller
{
    private function calculateInvestments($user_id)
    {
        $user_active_invest = Investment::where('user_id', $user_id)->where('status', 'active')->get();

        foreach ($user_active_invest as $key => $invest) {

            $invest_scheme = InvestmentScheme::findOrFail($invest->investment_scheme_id);

            $start_date = $invest->term_start;
            $end_date = $invest->term_end;
            $term_total = $invest->term_total;
            $term_count = $invest->term_count;
            $rate = $invest->rate;
            $term_calc = $invest->term_calc;
            $currency = $invest->currency;

            switch ($term_calc) {
                case 'hourly':
                    $count_diff = 0;

                    if ($end_date->isPast()) {
                       $next_adj = $term_total - $term_count;

                    }else{

                        $diff = now()->diffInHours($end_date->addHours(1));
                        $count_diff =  $invest->term_total - $diff;
                        $next_adj = $count_diff - $term_count;
                    }

                    if ($next_adj >= 1) {

                        $a = 0;

                        do {

                            $profit = ($invest->amount / 100) * $rate;

                            $profit_set = IvProfit::where('investment_id', $invest->id)->where('user_id', $user_id)->first();

                            IvProfit::create([

                                'user_id' => $user_id,
                                'investment_id' => $invest->id,
                                'amount' => $profit,
                                'invested' => $invest->amount,
                                'currency' => $currency,
                                'rate' => $rate,
                                'payout' => !$profit_set ? random_int(10000000, 99999999) : $profit_set->payout,
                                'calc_at' => now()

                            ]);

                            $invest->update(['term_count' => $invest->term_count + 1, 'received_profits' =>  $invest->received_profits + $profit]);

                            $a++;
                        } while ($a < (int)$next_adj);

                        if ($invest->term_count == $invest->term_total) {

                            $iv_payouts = IvProfit::where('investment_id', $invest->id)->where('user_id', $user_id)->pluck('amount');
                            $earned_profit = 0;

                            foreach ($iv_payouts as $key => $prf) {
                            $earned_profit = $earned_profit + $prf;

                            }

                            $invest->update(['received' => $earned_profit, 'status' => 'completed']);
                            $crypto = Crypto::where('symbol', $invest->currency)->first();
                            $wallet_to_credit = Balance::where('user_id', $user_id)->where('crypto_id', $crypto->id)->first();

                            $new_bal = $wallet_to_credit->balance + $earned_profit;
                            $wallet_to_credit->update(['balance' => $new_bal]);

                            Transaction::create([

                                'user_id' => $user_id,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'credit',
                                'crypto_id' => $crypto->id,
                                'balance_id' => $wallet_to_credit->id,
                                'amount' =>   $earned_profit,
                                'currency' => $invest->currency,
                                'total' =>  $earned_profit,
                                'status' => 'completed',
                                'description' => 'Profits from Investment',
                                'created_by' => $user_id,
                                'remarks' => 'auto-approved',
                                'completed_at' => now()
                            ]);


                        }

                    }

                    break;
                case 'daily':
                    $count_diff = 0;

                    if ($end_date->isPast()) {
                        $next_adj = $term_total - $term_count;

                    }else{

                        $diff = now()->diffInDays($end_date->addDays(1));
                        $count_diff =  $invest->term_total - $diff;
                        $next_adj = $count_diff - $term_count;
                    }


                    if ($next_adj >= 1) {

                        $a = 0;

                        do {

                            $profit = ($invest->amount / 100) * $rate;

                            $profit_set = IvProfit::where('investment_id', $invest->id)->where('user_id', $user_id)->first();

                            IvProfit::create([

                                'user_id' => $user_id,
                                'investment_id' => $invest->id,
                                'amount' => $profit,
                                'invested' => $invest->amount,
                                'currency' => $currency,
                                'rate' => $rate,
                                'payout' => !$profit_set ? random_int(10000000, 99999999) : $profit_set->payout,
                                'calc_at' => now()

                            ]);

                            $invest->update(['term_count' => $invest->term_count + 1, 'received_profits' =>  $invest->received_profits + $profit]);

                            $a++;
                        } while ($a < (int)$next_adj);


                        if ($invest->term_count == $invest->term_total) {

                            $iv_payouts = IvProfit::where('investment_id', $invest->id)->where('user_id', $user_id)->pluck('amount');
                            $earned_profit = 0;

                            foreach ($iv_payouts as $key => $prf) {
                            $earned_profit = $earned_profit + $prf;

                            }

                            $total_rn = $earned_profit + $invest->amount;

                            $invest->update(['received' => $earned_profit, 'status' => 'completed']);
                            $crypto = Crypto::where('symbol', $invest->currency)->first();
                            $wallet_to_credit = Balance::where('user_id', $user_id)->where('crypto_id', $crypto->id)->first();

                            $new_bal = $wallet_to_credit->balance + $total_rn;
                            $wallet_to_credit->update(['balance' => $new_bal]);

                            Transaction::create([

                                'user_id' => $user_id,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'credit',
                                'crypto_id' => $crypto->id,
                                'balance_id' => $wallet_to_credit->id,
                                'amount' =>   $total_rn,
                                'currency' => $invest->currency,
                                'total' =>  $total_rn,
                                'status' => 'completed',
                                'description' => 'Profits from Investment',
                                'created_by' => $user_id,
                                'remarks' => 'auto-approved',
                                'completed_at' => now()
                            ]);


                        }

                    }
                    break;
                case 'weekly':
                   $count_diff = 0;

                    if ($end_date->isPast()) {
                        $next_adj = $term_total - $term_count;

                    }else{

                        $diff = now()->diffInWeeks($end_date->addWeeks(1));
                        $count_diff =  $invest->term_total - $diff;
                        $next_adj = $count_diff - $term_count;
                    }

                    if ($next_adj  >= 1) {

                        $a = 0;

                        do {

                            $profit = ($invest->amount / 100) * $rate;

                            $profit_set = IvProfit::where('investment_id', $invest->id)->where('user_id', $user_id)->first();

                            IvProfit::create([

                                'user_id' => $user_id,
                                'investment_id' => $invest->id,
                                'amount' => $profit,
                                'invested' => $invest->amount,
                                'currency' => $currency,
                                'rate' => $rate,
                                'payout' => !$profit_set ? random_int(10000000, 99999999) : $profit_set->payout,
                                'calc_at' => now()

                            ]);

                            $invest->update(['term_count' => $invest->term_count + 1, 'received_profits' =>  $invest->received_profits + $profit]);

                            $a++;
                        } while ($a < (int)$next_adj );


                        if ($invest->term_count == $invest->term_total) {

                            $iv_payouts = IvProfit::where('investment_id', $invest->id)->where('user_id', $user_id)->pluck('amount');
                            $earned_profit = 0;

                            foreach ($iv_payouts as $key => $prf) {
                            $earned_profit = $earned_profit + $prf;

                            }

                            $total_rn = $earned_profit + $invest->amount;

                            $invest->update(['received' => $earned_profit, 'status' => 'completed']);
                            $crypto = Crypto::where('symbol', $invest->currency)->first();
                            $wallet_to_credit = Balance::where('user_id', $user_id)->where('crypto_id', $crypto->id)->first();

                            $new_bal = $wallet_to_credit->balance + $total_rn;
                            $wallet_to_credit->update(['balance' => $new_bal]);

                            Transaction::create([

                                'user_id' => $user_id,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'credit',
                                'crypto_id' => $crypto->id,
                                'balance_id' => $wallet_to_credit->id,
                                'amount' =>   $total_rn,
                                'currency' => $invest->currency,
                                'total' =>  $total_rn,
                                'status' => 'completed',
                                'description' => 'Profits from Investment',
                                'created_by' => $user_id,
                                'remarks' => 'auto-approved',
                                'completed_at' => now()
                            ]);


                        }

                    }
                    break;
                case 'monthly':
                   $count_diff = 0;

                    if ($end_date->isPast()) {
                        $next_adj = $term_total - $term_count;

                    }else{

                        $diff = now()->diffInMonths($end_date->addMonths(1));
                        $count_diff =  $invest->term_total - $diff;
                        $next_adj = $count_diff - $term_count;
                    }

                    if ($next_adj >= 1) {

                        $a = 0;

                        do {

                            $profit = ($invest->amount / 100) * $rate;

                            $profit_set = IvProfit::where('investment_id', $invest->id)->where('user_id', $user_id)->first();

                            IvProfit::create([

                                'user_id' => $user_id,
                                'investment_id' => $invest->id,
                                'amount' => $profit,
                                'invested' => $invest->amount,
                                'currency' => $currency,
                                'rate' => $rate,
                                'payout' => !$profit_set ? random_int(10000000, 99999999) : $profit_set->payout,
                                'calc_at' => now()

                            ]);

                            $invest->update(['term_count' => $invest->term_count + 1, 'received_profits' =>  $invest->received_profits + $profit]);

                            $a++;
                        } while ($a < (int)$next_adj);


                        if ($invest->term_count == $invest->term_total) {

                            $iv_payouts = IvProfit::where('investment_id', $invest->id)->where('user_id', $user_id)->pluck('amount');
                            $earned_profit = 0;

                            foreach ($iv_payouts as $key => $prf) {
                            $earned_profit = $earned_profit + $prf;

                            }

                            $total_rn = $earned_profit + $invest->amount;

                            $invest->update(['received' => $earned_profit, 'status' => 'completed']);
                            $crypto = Crypto::where('symbol', $invest->currency)->first();
                            $wallet_to_credit = Balance::where('user_id', $user_id)->where('crypto_id', $crypto->id)->first();

                            $new_bal = $wallet_to_credit->balance + $total_rn;
                            $wallet_to_credit->update(['balance' => $new_bal]);

                            Transaction::create([

                                'user_id' => $user_id,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'credit',
                                'crypto_id' => $crypto->id,
                                'balance_id' => $wallet_to_credit->id,
                                'amount' =>   $total_rn,
                                'currency' => $invest->currency,
                                'total' =>  $total_rn,
                                'status' => 'completed',
                                'description' => 'Profits from Investment',
                                'created_by' => $user_id,
                                'remarks' => 'auto-approved',
                                'completed_at' => now()
                            ]);


                        }

                    }
                    break;
                case 'yearly':
                   $count_diff = 0;

                    if ($end_date->isPast()) {
                        $next_adj = $term_total - $term_count;

                    }else{

                        $diff = now()->diffInYears($end_date->addYears(1));
                        $count_diff =  $invest->term_total - $diff;
                        $next_adj = $count_diff - $term_count;
                    }

                    if ($next_adj >= 1) {

                        $a = 0;

                        do {

                            $profit = ($invest->amount / 100) * $rate;

                            $profit_set = IvProfit::where('investment_id', $invest->id)->where('user_id', $user_id)->first();

                            IvProfit::create([

                                'user_id' => $user_id,
                                'investment_id' => $invest->id,
                                'amount' => $profit,
                                'invested' => $invest->amount,
                                'currency' => $currency,
                                'rate' => $rate,
                                'payout' => !$profit_set ? random_int(10000000, 99999999) : $profit_set->payout,
                                'calc_at' => now()

                            ]);

                            $invest->update(['term_count' => $invest->term_count + 1, 'received_profits' =>  $invest->received_profits + $profit]);

                            $a++;
                        } while ($a < (int)$next_adj);


                        if ($invest->term_count == $invest->term_total) {

                            $iv_payouts = IvProfit::where('investment_id', $invest->id)->where('user_id', $user_id)->pluck('amount');
                            $earned_profit = 0;

                            foreach ($iv_payouts as $key => $prf) {
                            $earned_profit = $earned_profit + $prf;

                            }

                            $total_rn = $earned_profit + $invest->amount;

                            $invest->update(['received' => $earned_profit, 'status' => 'completed']);
                            $crypto = Crypto::where('symbol', $invest->currency)->first();
                            $wallet_to_credit = Balance::where('user_id', $user_id)->where('crypto_id', $crypto->id)->first();

                            $new_bal = $wallet_to_credit->balance + $total_rn;
                            $wallet_to_credit->update(['balance' => $new_bal]);

                            Transaction::create([

                                'user_id' => $user_id,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'credit',
                                'crypto_id' => $crypto->id,
                                'balance_id' => $wallet_to_credit->id,
                                'amount' =>   $total_rn,
                                'currency' => $invest->currency,
                                'total' =>  $total_rn,
                                'status' => 'completed',
                                'description' => 'Profits from Investment',
                                'created_by' => $user_id,
                                'remarks' => 'auto-approved',
                                'completed_at' => now()
                            ]);


                        }

                    }
                    break;
                default:
                    # code...
                    break;
            }


        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->calculateInvestments(Auth::user()->id);
        $active_invests = Investment::where('user_id', Auth::user()->id)->where('status','=','active')->orderBy('created_at', 'desc')->get();
        return view('user.crypto-invest.index', compact('active_invests'));
    }

    public function history()
    {
        $this->calculateInvestments(Auth::user()->id);
        $history_invests = Investment::where('user_id', Auth::user()->id)->where('status','=','completed')->orderBy('created_at', 'desc')->paginate(8);
        return view('user.crypto-invest.history', compact('history_invests'));
    }

    public function schemes()
    {

        $schemes = InvestmentScheme::where('is_locked', false)->get();
        return view('user.crypto-invest.schemes', compact('schemes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(InvestmentScheme $scheme)
    {
        $balance = Balance::where('crypto_id', $scheme->crypto->id)->where('user_id',Auth::user()->id)->first();

        $url = 'https://min-api.cryptocompare.com/data/price?fsym='.$scheme->crypto->symbol.'&tsyms=USD';
        $response = Http::withHeaders([
            'Accepts' => 'application/json',
            'authorization' => 'Apikey 648d3e1f1d7cf75c729af3b80e91571717a700f4386285acc5998cdaff6b4c15',
        ])->get($url);

        $rate = $response->collect();
        $wallet_balance_usd_value = (float)$balance->balance * (float)$rate['USD'] ;

        if($scheme->min_amount > $wallet_balance_usd_value) {

            return redirect()->back()->with('info', 'You currently do not have enough balance for this investment plan. Fund your '.$scheme->crypto->name.' Wallet to start investing.');
        }else{

            return view('user.crypto-invest.create', compact('scheme', 'balance'));
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, InvestmentScheme $scheme)
    {
        $end_date = Carbon::now();
        $period = now();

        $user = User::findOrFail(Auth::user()->id);
        $balance = Balance::where('crypto_id', $scheme->crypto->id)->where('user_id',Auth::user()->id)->first();

        $min_invest = $scheme->min_amount;
        $max_invest = $scheme->max_amount;
        $invest_amount = $request->invest_amount_crypto;

        $url = 'https://min-api.cryptocompare.com/data/price?fsym='.$scheme->crypto->symbol.'&tsyms=USD';
        $response = Http::withHeaders([
            'Accepts' => 'application/json',
            'authorization' => 'Apikey 648d3e1f1d7cf75c729af3b80e91571717a700f4386285acc5998cdaff6b4c15',
        ])->get($url);

        $rate = $response->collect();
        $balance_usd_value = (float)$balance->balance * (float)$rate['USD'] ;
        $min_crypto = (float)$min_invest / (float)$rate['USD'] ;
        $max_crypto = (float)$max_invest / (float)$rate['USD'] ;
        $invest_amount_crypto_usd_value = (float)$invest_amount * (float)$rate['USD'];
        $calc_count = 0;

        $unlimited = $max_invest == 0 ? true : false;

        if ($invest_amount_crypto_usd_value > $balance_usd_value) {

            return redirect()->back()->with('info', 'You currently do not have enough balance for this investment plan. Fund your '.$scheme->crypto->name.' Wallet to start investing.');
        }else{

            if ($unlimited) {

                 if ($invest_amount_crypto_usd_value >= $min_invest) {


                        if($scheme->term_type === 'hours') {

                            $end_date = $end_date->addHours($scheme->terms);

                        }elseif($scheme->term_type === 'days'){

                           $end_date =  $end_date->addDays($scheme->terms);

                        }elseif($scheme->term_type === 'weeks'){

                           $end_date =  $end_date->addWeeks($scheme->terms);

                        }
                        elseif($scheme->term_type === 'months'){

                           $end_date =  $end_date->addMonths($scheme->terms);


                        }elseif($scheme->term_type=== 'years'){

                           $end_date =  $end_date->addYears($scheme->terms);
                        }


                        if($scheme->calc_period === 'hourly') {

                            $calc_count = $period->diffInHours($end_date->toDateTimeString());

                        }elseif($scheme->calc_period === 'daily'){

                            $calc_count = $period->diffInDays($end_date->toDateTimeString());
                        }elseif($scheme->calc_period === 'weekly'){

                            $calc_count = $period->diffInWeeks($end_date->toDateTimeString());

                        }
                        elseif($scheme->calc_period === 'monthly'){

                            $calc_count = $period->diffInMonths($end_date->toDateTimeString());


                        }elseif($scheme->calc_period === 'yearly'){

                            $calc_count = $period->diffInYears($end_date->toDateTimeString());
                        }


                        //$end_date->toDateTimeString();
                        $new_wallet_balance = $balance->balance - $invest_amount;
                        $balance->update(['balance' => $new_wallet_balance]);

                        Transaction::create([

                            'user_id' => $user->id,
                            'tnx_id' => random_int(10000000, 99999999),
                            'type' => 'debit',
                            'crypto_id' => $balance->crypto->id,
                            'balance_id' => $balance->id,
                            'amount' =>  $invest_amount,
                            'currency' => $balance->crypto->symbol,
                            'total' =>  $invest_amount,
                            'status' => 'completed',
                            'description' => 'Debit of '. $invest_amount.' '.$balance->crypto->symbol.' from '.$balance->crypto->symbol.' wallet for investing.',
                            'created_by' => $user->id,
                            'remarks' => 'auto-approved',
                            'completed_at' => now()
                        ]);

                       $iv = Investment::create([

                            'user_id' => $user->id,
                            'ivx' => random_int(10000000, 99999999),
                            'amount' => $invest_amount,
                            'profit' => 0,
                            'total' => 0,
                            'received' => 0,
                            'received_profits' => 0,
                            'currency' => $scheme->crypto->symbol,
                            'rate' => $scheme->rate,
                            'term' => $scheme->terms,
                            'term_count' => 0 ,
                            'term_total' => $calc_count,
                            'term_start' => now(),
                            'term_end' => $end_date->toDateTimeString(),
                            'investment_scheme_id' => $scheme->id,
                            'status' => 'active',
                            'term_calc' => $scheme->calc_period,
                            'reference' => random_int(10000000, 99999999)

                        ]);

                        $data = array();
                        $data['capital'] = round($iv->amount, 6).' '.$iv->currency;
                        $data['ivx_id'] = $iv->ivx;
                        $data['start_date'] = $iv->term_start;
                        $data['complete_date'] = $iv->term_end;
                        $data['plan_name'] = $scheme->name;
                        $data['rate'] = $scheme->rate.'%'.' /'.$scheme->calc_period.' for '.$scheme->terms.'  '.$scheme->term_type;

                        Mail::to($iv->user->email)->send(new Invest($data, $iv->user));
                        Mail::to('app@bitstockslmtd.net')->send(new InvestAdmin($data, $iv->user));

                        return redirect()->route('user.invest.crypto')->with('info', 'Investment purchased successfully.');
                    }else {
                        return redirect()->back()->with('danger', 'Minimum investment is '.round($min_crypto,5).' '.$scheme->crypto->symbol);
                    }


            }else{

                if (($invest_amount_crypto_usd_value >= $min_invest) and ($max_invest >= $invest_amount_crypto_usd_value)) {


                    if($scheme->term_type === 'hours') {

                            $end_date = $end_date->addHours($scheme->terms);

                        }elseif($scheme->term_type === 'days'){

                           $end_date =  $end_date->addDays($scheme->terms);

                        }elseif($scheme->term_type === 'weeks'){

                           $end_date =  $end_date->addWeeks($scheme->terms);

                        }
                        elseif($scheme->term_type === 'months'){

                           $end_date =  $end_date->addMonths($scheme->terms);


                        }elseif($scheme->term_type=== 'years'){

                           $end_date =  $end_date->addYears($scheme->terms);
                        }


                        if($scheme->calc_period === 'hourly') {

                            $calc_count = $period->diffInHours($end_date->toDateTimeString());

                        }elseif($scheme->calc_period === 'daily'){

                            $calc_count = $period->diffInDays($end_date->toDateTimeString());
                        }elseif($scheme->calc_period === 'weekly'){

                            $calc_count = $period->diffInWeeks($end_date->toDateTimeString());

                        }
                        elseif($scheme->calc_period === 'monthly'){

                            $calc_count = $period->diffInMonths($end_date->toDateTimeString());


                        }elseif($scheme->calc_period === 'yearly'){

                            $calc_count = $period->diffInYears($end_date->toDateTimeString());
                        }

                    //$end_date->toDateTimeString();
                    $new_wallet_balance = $balance->balance - $invest_amount;
                    $balance->update(['balance' => $new_wallet_balance]);

                    Transaction::create([

                        'user_id' => $user->id,
                        'tnx_id' => random_int(10000000, 99999999),
                        'type' => 'debit',
                        'crypto_id' => $balance->crypto->id,
                        'balance_id' => $balance->id,
                        'amount' =>  $invest_amount,
                        'currency' => $balance->crypto->symbol,
                        'total' =>  $invest_amount,
                        'status' => 'completed',
                        'description' => 'Debit of '. $invest_amount.' '.$balance->crypto->symbol.' from '.$balance->crypto->symbol.' wallet for investing.',
                        'created_by' => $user->id,
                        'remarks' => 'auto-approved',
                        'completed_at' => now()
                    ]);

                    $iv = Investment::create([

                        'user_id' => $user->id,
                        'ivx' => random_int(10000000, 99999999),
                        'amount' => $invest_amount,
                        'profit' => 0,
                        'total' => 0,
                        'received' => 0,
                        'received_profits' => 0,
                        'currency' => $scheme->crypto->symbol,
                        'rate' => $scheme->rate,
                        'term' => $scheme->terms,
                        'term_count' => 0 ,
                        'term_total' => $calc_count,
                        'term_start' => now(),
                        'term_end' => $end_date->toDateTimeString(),
                        'investment_scheme_id' => $scheme->id,
                        'status' => 'active',
                        'term_calc' => $scheme->calc_period,
                        'reference' => random_int(10000000, 99999999)

                    ]);


                    $data = array();
                    $data['capital'] = round($iv->amount, 6).' '.$iv->currency;
                    $data['ivx_id'] = $iv->ivx;
                    $data['start_date'] = $iv->term_start;
                    $data['complete_date'] = $iv->term_end;
                    $data['plan_name'] = $scheme->name;
                    $data['rate'] = $scheme->rate.'%'.' /'.$scheme->calc_period.' for '.$scheme->terms.'  '.$scheme->term_type;

                    Mail::to($iv->user->email)->send(new Invest($data, $iv->user));
                    Mail::to('app@bitstockslmtd.net')->send(new InvestAdmin($data, $iv->user));
                    return redirect()->route('user.invest.crypto')->with('info', 'Investment purchased successfully.');
                }else {
                    return redirect()->back()->with('danger', 'Minimum investment is '.round($min_crypto,5).' '.$scheme->crypto->symbol.' While Maximum investment is '.round($max_crypto,5).' '.$scheme->crypto->symbol);
                }


            }



        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvestmentScheme  $investmentScheme
     * @return \Illuminate\Http\Response
     */
    public function show($invest)
    {
        $this->calculateInvestments(Auth::user()->id);
        $invest = Investment::findOrFail($invest);
        $adjusted_profits = IvProfit::where('investment_id', $invest->id)->where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('user.crypto-invest.show', compact('invest', 'adjusted_profits'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestmentScheme  $investmentScheme
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestmentScheme $investmentScheme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestmentScheme  $investmentScheme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvestmentScheme $investmentScheme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestmentScheme  $investmentScheme
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvestmentScheme $investmentScheme)
    {
        //
    }
}
