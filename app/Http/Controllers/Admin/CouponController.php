<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Crypto;
use App\Models\User;
use Illuminate\Http\Request;
use Str;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::orderBy('created_at','desc')->get();
        return view('admin.coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('is_active', true)->get();
        $cryptos = Crypto::where('active', true)->get();

        return view('admin.coupons.create', compact('users', 'cryptos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->filled('crypto_id')) {
            $crypto = Crypto::findOrFail($request->crypto_id);
            $currency = $crypto->symbol;
        }else{

            $currency = 'USD';
        }

        Coupon::create([

            'user_id' => $request->filled('user_id') ? $request->user_id : null,
            'crypto_id' => $request->filled('crypto_id') ? $request->crypto_id : NULL,
            'amount' => $request->amount,
            'name' => $request->name,
            'code' => $request->filled('code') ? $request->code : Str::upper(Str::random(8)),
            'description' => $request->filled('description') ? $request->description : NULL,
            'reward_type' => $request->reward_type,
            'reward_currency' => $currency ,
            'credit_reward_to' => $request->credit_reward_to,

        ]);

        return redirect()->back()->with('success', 'Coupon Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->back()->with('danger', 'Coupon deleted successfully.');
    }
}
