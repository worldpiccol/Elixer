<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WalletAddress;
use App\Models\Crypto;
use Illuminate\Http\Request;

class WalletAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wallets = WalletAddress::all();
        return view('admin.wallets.index', compact('wallets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cryptos = Crypto::where('active',true)->get();
        return view('admin.wallets.create',compact('cryptos'));
    }

    public function status(WalletAddress $wallet)
    {

        if ($wallet->is_locked === 0) {
            $wallet->update(['is_locked' => true]);
        }else {
            $wallet->update(['is_locked' => false]);
        }

        return redirect()->back()->with('success', 'Wallet updated successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        WalletAddress::create([

            'crypto_id' => $request->crypto_id,
            'wallet_address' => $request->wallet_address,
            'platform' => $request->platform,
            'title' => $request->title,
            'instruction_to_user' => $request->instruction_to_user,
        ]);

        return redirect()->back()->with('success', 'Wallet Address Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WalletAddress  $walletAddress
     * @return \Illuminate\Http\Response
     */
    public function show(WalletAddress $walletAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WalletAddress  $walletAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(WalletAddress $walletAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WalletAddress  $walletAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WalletAddress $walletAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WalletAddress  $walletAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(WalletAddress $wallet)
    {

        $wallet->delete();
        return redirect()->back()->with('danger', 'Wallet deleted successfully.');
    }
}
