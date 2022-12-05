<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\IvProfit;
use App\Models\Crypto;
use App\Models\Balance;
use App\Models\Transaction;
use App\Models\Investment;
use App\Models\InvestmentScheme;
use Auth;
use Carbon\Carbon;

class CalcInvest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:calcInvest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user_active_invest = Investment::where('user_id', 6)->where('status', 'active')->get();

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
                    $diff = Carbon::parse($start_date)->diffInHours(now());
                    $count_diff = 0;

                    if ($end_date->isPast()) {
                        $count_diff = $term_total - $term_count;

                    }else{

                        $diff = Carbon::parse(now())->diffInHours($end_date);
                        $count_diff =  $term_total - $diff;
                    }

                    if ($count_diff >= 1) {

                        $a = 0;

                        do {

                            $profit = ($invest->amount / 100) * $rate;

                            $profit_set = IvProfit::where('investment_id', $invest->id)->where('user_id', 6)->first();

                            IvProfit::create([

                                'user_id' => 6,
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
                        } while ($a < (int)$count_diff);

                        if ($invest_scheme->payout === 'after-matured') {


                        }

                        if ($invest->term_count == $invest->term_total) {

                            $iv_payouts = IvProfit::where('investment_id', $invest->id)->where('user_id', 6)->pluck('amount');
                            $earned_profit = 0;

                            foreach ($iv_payouts as $key => $prf) {
                            $earned_profit = $earned_profit + $prf;

                            }

                            $invest->update(['received' => $earned_profit, 'status' => 'completed']);
                            $crypto = Crypto::where('symbol', $invest->currency)->first();
                            $wallet_to_credit = Balance::where('user_id', 6)->where('crypto_id', $crypto->id)->first();

                            $new_bal = $wallet_to_credit->balance + $earned_profit;
                            $wallet_to_credit->update(['balance' => $new_bal]);

                            Transaction::create([

                                'user_id' => 6,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'credit',
                                'crypto_id' => $crypto->id,
                                'balance_id' => $wallet_to_credit->id,
                                'amount' =>   $earned_profit,
                                'currency' => $invest->currency,
                                'total' =>  $earned_profit,
                                'status' => 'completed',
                                'description' => 'Profits from Investment',
                                'created_by' => 6,
                                'remarks' => 'auto-approved',
                                'completed_at' => now()
                            ]);


                        }

                    }

                    break;
                case 'daily':
                    $count_diff = 0;

                    if ($end_date->isPast()) {
                        $count_diff = $term_total - $term_count;

                    }else{

                        $diff = Carbon::parse(now())->diffInDays($end_date);
                        $count_diff =  $term_total - $diff;
                    }

                    if ($count_diff >= 1) {

                        $a = 0;

                        do {

                            $profit = ($invest->amount / 100) * $rate;

                            $profit_set = IvProfit::where('investment_id', $invest->id)->where('user_id', 6)->first();

                            IvProfit::create([

                                'user_id' => 6,
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
                        } while ($a < (int)$count_diff);


                        if ($invest->term_count == $invest->term_total) {

                            $iv_payouts = IvProfit::where('investment_id', $invest->id)->where('user_id', 6)->pluck('amount');
                            $earned_profit = 0;

                            foreach ($iv_payouts as $key => $prf) {
                            $earned_profit = $earned_profit + $prf;

                            }

                            $total_rn = $earned_profit + $invest->amount;

                            $invest->update(['received' => $earned_profit, 'status' => 'completed']);
                            $crypto = Crypto::where('symbol', $invest->currency)->first();
                            $wallet_to_credit = Balance::where('user_id', 6)->where('crypto_id', $crypto->id)->first();

                            $new_bal = $wallet_to_credit->balance + $total_rn;
                            $wallet_to_credit->update(['balance' => $new_bal]);

                            Transaction::create([

                                'user_id' => 6,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'credit',
                                'crypto_id' => $crypto->id,
                                'balance_id' => $wallet_to_credit->id,
                                'amount' =>   $total_rn,
                                'currency' => $invest->currency,
                                'total' =>  $total_rn,
                                'status' => 'completed',
                                'description' => 'Profits from Investment',
                                'created_by' => 6,
                                'remarks' => 'auto-approved',
                                'completed_at' => now()
                            ]);


                        }

                    }
                    break;
                case 'weekly':
                   $count_diff = 0;

                    if ($end_date->isPast()) {
                        $count_diff = $term_total - $term_count;

                    }else{

                        $diff = Carbon::parse(now())->diffInWeeks($end_date);
                        $count_diff =  $term_total - $diff;
                    }

                    if ($count_diff >= 1) {

                        $a = 0;

                        do {

                            $profit = ($invest->amount / 100) * $rate;

                            $profit_set = IvProfit::where('investment_id', $invest->id)->where('user_id', 6)->first();

                            IvProfit::create([

                                'user_id' => 6,
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
                        } while ($a < (int)$count_diff);


                        if ($invest->term_count == $invest->term_total) {

                            $iv_payouts = IvProfit::where('investment_id', $invest->id)->where('user_id', 6)->pluck('amount');
                            $earned_profit = 0;

                            foreach ($iv_payouts as $key => $prf) {
                            $earned_profit = $earned_profit + $prf;

                            }

                            $total_rn = $earned_profit + $invest->amount;

                            $invest->update(['received' => $earned_profit, 'status' => 'completed']);
                            $crypto = Crypto::where('symbol', $invest->currency)->first();
                            $wallet_to_credit = Balance::where('user_id', 6)->where('crypto_id', $crypto->id)->first();

                            $new_bal = $wallet_to_credit->balance + $total_rn;
                            $wallet_to_credit->update(['balance' => $new_bal]);

                            Transaction::create([

                                'user_id' => 6,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'credit',
                                'crypto_id' => $crypto->id,
                                'balance_id' => $wallet_to_credit->id,
                                'amount' =>   $total_rn,
                                'currency' => $invest->currency,
                                'total' =>  $total_rn,
                                'status' => 'completed',
                                'description' => 'Profits from Investment',
                                'created_by' => 6,
                                'remarks' => 'auto-approved',
                                'completed_at' => now()
                            ]);


                        }

                    }
                    break;
                case 'monthly':
                   $count_diff = 0;

                    if ($end_date->isPast()) {
                        $count_diff = $term_total - $term_count;

                    }else{

                        $diff = Carbon::parse(now())->diffInMonths($end_date);
                        $count_diff =  $term_total - $diff;
                    }

                    if ($count_diff >= 1) {

                        $a = 0;

                        do {

                            $profit = ($invest->amount / 100) * $rate;

                            $profit_set = IvProfit::where('investment_id', $invest->id)->where('user_id', 6)->first();

                            IvProfit::create([

                                'user_id' => 6,
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
                        } while ($a < (int)$count_diff);


                        if ($invest->term_count == $invest->term_total) {

                            $iv_payouts = IvProfit::where('investment_id', $invest->id)->where('user_id', 6)->pluck('amount');
                            $earned_profit = 0;

                            foreach ($iv_payouts as $key => $prf) {
                            $earned_profit = $earned_profit + $prf;

                            }

                            $total_rn = $earned_profit + $invest->amount;

                            $invest->update(['received' => $earned_profit, 'status' => 'completed']);
                            $crypto = Crypto::where('symbol', $invest->currency)->first();
                            $wallet_to_credit = Balance::where('user_id', 6)->where('crypto_id', $crypto->id)->first();

                            $new_bal = $wallet_to_credit->balance + $total_rn;
                            $wallet_to_credit->update(['balance' => $new_bal]);

                            Transaction::create([

                                'user_id' => 6,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'credit',
                                'crypto_id' => $crypto->id,
                                'balance_id' => $wallet_to_credit->id,
                                'amount' =>   $total_rn,
                                'currency' => $invest->currency,
                                'total' =>  $total_rn,
                                'status' => 'completed',
                                'description' => 'Profits from Investment',
                                'created_by' => 6,
                                'remarks' => 'auto-approved',
                                'completed_at' => now()
                            ]);


                        }

                    }
                    break;
                case 'yearly':
                      $this->info('In weeks');
                   $count_diff = 0;

                    if ($end_date->isPast()) {
                        $count_diff = $term_total - $term_count;

                    }else{

                        $diff = Carbon::parse(now())->diffInYears($end_date);
                        $count_diff =  $term_total - $diff;
                    }

                    if ($count_diff >= 1) {

                        $a = 0;

                        do {

                            $profit = ($invest->amount / 100) * $rate;

                            $profit_set = IvProfit::where('investment_id', $invest->id)->where('user_id', 6)->first();

                            IvProfit::create([

                                'user_id' => 6,
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
                        } while ($a < (int)$count_diff);


                        if ($invest->term_count == $invest->term_total) {

                            $iv_payouts = IvProfit::where('investment_id', $invest->id)->where('user_id', 6)->pluck('amount');
                            $earned_profit = 0;

                            foreach ($iv_payouts as $key => $prf) {
                            $earned_profit = $earned_profit + $prf;

                            }

                            $total_rn = $earned_profit + $invest->amount;

                            $invest->update(['received' => $earned_profit, 'status' => 'completed']);
                            $crypto = Crypto::where('symbol', $invest->currency)->first();
                            $wallet_to_credit = Balance::where('user_id', 6)->where('crypto_id', $crypto->id)->first();

                            $new_bal = $wallet_to_credit->balance + $total_rn;
                            $wallet_to_credit->update(['balance' => $new_bal]);

                            Transaction::create([

                                'user_id' => 6,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'credit',
                                'crypto_id' => $crypto->id,
                                'balance_id' => $wallet_to_credit->id,
                                'amount' =>   $total_rn,
                                'currency' => $invest->currency,
                                'total' =>  $total_rn,
                                'status' => 'completed',
                                'description' => 'Profits from Investment',
                                'created_by' => 6,
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
}
