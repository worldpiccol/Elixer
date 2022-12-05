<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coupon;
use App\Models\RewardClaim;
use App\Models\Balance;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Auth;
use Str;

class RewardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $public_rewards = Coupon::where('reward_type','public')->orderBy('created_at', 'desc')->get();
        $user_rewards = Coupon::where('user_id',Auth::user()->id)->where('is_claimed', false)->orderBy('created_at', 'desc')->get();

        return view('user.rewards.index', compact('public_rewards','user_rewards'));
    }

    public function claim(Coupon $reward)
    {
        $user = User::findOrFail( Auth::user()->id);
        $crypto_wallet = Balance::where('crypto_id', $reward->crypto_id)->where('user_id', $user->id)->first();

        switch ($reward->reward_type) {
            case 'public':

                if (!auth()->user()->hasClaimedReward($reward->id)) {

                    $new_wallet_bal = $crypto_wallet->balance + $reward->amount;
                    $crypto_wallet->update(['balance' => $new_wallet_bal]);

                    RewardClaim::create([

                        'user_id' => $user->id,
                        'coupon_id' => $reward->id,
                        'remark' => 'approved'
                    ]);

                    Transaction::create([

                        'user_id' => $user->id,
                        'tnx_id' => random_int(10000000, 99999999),
                        'type' => 'rewards',
                        'crypto_id' => $reward->crypto_id,
                        'balance_id' => $crypto_wallet->id,
                        'amount' =>  $reward->amount,
                        'currency' => $reward->reward_currency,
                        'total' =>  $reward->amount,
                        'status' => 'completed',
                        'description' => 'Reward claim',
                        'created_by' => $user->id,
                        'remarks' => 'auto-approved',
                        'completed_at' => now()
                    ]);

                    return redirect()->back()->with('success', 'Reward Claimed Successfully');

                }


                break;
            case 'single-user':

                    if (!auth()->user()->hasClaimedReward($reward->id)) {

                       if ($reward->user_id == $user->id) {

                            $new_wallet_bal = $crypto_wallet->balance + $reward->amount;
                            $crypto_wallet->update(['balance' => $new_wallet_bal]);

                            RewardClaim::create([

                                'user_id' => $user->id,
                                'coupon_id' => $reward->id,
                                'remark' => 'approved'
                            ]);

                            $reward->update(['is_claimed' => true]);

                            Transaction::create([

                                'user_id' => $user->id,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'rewards',
                                'crypto_id' => $reward->crypto_id,
                                'balance_id' => $crypto_wallet->id,
                                'amount' =>  $reward->amount,
                                'currency' => $reward->reward_currency,
                                'total' =>  $reward->amount,
                                'status' => 'completed',
                                'description' => 'Reward claim',
                                'created_by' => $user->id,
                                'remarks' => 'auto-approved',
                                'completed_at' => now(),

                            ]);

                            return redirect()->back()->with('success', 'Reward Claimed Successfully');
                        }
                    }

                break;
            default:
                # code...
                break;
        }

    }

    public function claimCode(Request $request)
    {
        $reward = Coupon::where('code', Str::upper($request->code))->first();
        $user = User::findOrFail(Auth::user()->id);

        if ($reward) {

            $crypto_wallet = Balance::where('crypto_id', $reward->crypto_id)->where('user_id', $user->id)->first();

            if (!auth()->user()->hasClaimedReward($reward->id)) {

                if ($reward->user_id  != null) {

                    if ($user->id == $reward->user_id) {

                            $new_wallet_bal = $crypto_wallet->balance + $reward->amount;
                            $crypto_wallet->update(['balance' => $new_wallet_bal]);

                            RewardClaim::create([

                                'user_id' => $user->id,
                                'coupon_id' => $reward->id,
                                'remark' => 'approved'
                            ]);

                            $reward->update(['is_claimed' => true]);

                            Transaction::create([

                                'user_id' => $user->id,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'rewards',
                                'crypto_id' => $reward->crypto_id,
                                'balance_id' => $crypto_wallet->id,
                                'amount' =>  $reward->amount,
                                'currency' => $reward->reward_currency,
                                'total' =>  $reward->amount,
                                'status' => 'completed',
                                'description' => 'Reward claim',
                                'created_by' => $user->id,
                                'remarks' => 'auto-approved',
                                'completed_at' => now(),

                            ]);

                            return redirect()->back()->with('success', 'Reward Claimed Successfully');
                    }else{

                        return redirect()->back()->with('warning', 'You are not allowed to claim this code.');
                    }
                }else{

                            $new_wallet_bal = $crypto_wallet->balance + $reward->amount;
                            $crypto_wallet->update(['balance' => $new_wallet_bal]);

                            RewardClaim::create([

                                'user_id' => $user->id,
                                'coupon_id' => $reward->id,
                                'remark' => 'approved'
                            ]);

                            Transaction::create([

                                'user_id' => $user->id,
                                'tnx_id' => random_int(10000000, 99999999),
                                'type' => 'rewards',
                                'crypto_id' => $reward->crypto_id,
                                'balance_id' => $crypto_wallet->id,
                                'amount' =>  $reward->amount,
                                'currency' => $reward->reward_currency,
                                'total' =>  $reward->amount,
                                'status' => 'completed',
                                'description' => 'Reward claim',
                                'created_by' => $user->id,
                                'remarks' => 'auto-approved',
                                'completed_at' => now(),

                            ]);

                            return redirect()->back()->with('success', 'Reward Claimed Successfully');
                }

            }else {

                return redirect()->back()->with('warning', 'You have already claimed this voucher code');

            }

        }else {

            return redirect()->back()->with('warning', 'This code do not exist');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function show(Reward $reward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function edit(Reward $reward)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Coupon $reward)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reward $reward)
    {
        //
    }
}
