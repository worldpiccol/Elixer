<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvestmentScheme;
use App\Models\Crypto;
use Illuminate\Http\Request;
use Str;

class InvestmentSchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schemes = InvestmentScheme::all();
        return view('admin.iv_schemes.index' , compact('schemes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cryptos = Crypto::where('active', true)->get();
        return view('admin.iv_schemes.create', compact('cryptos'));
    }


    public function status(InvestmentScheme $scheme)
    {

        if ($scheme->status ===  'active') {
            $scheme->update(['status' => 'inactive']);
        }else {
            $scheme->update(['status' => 'active']);
        }

        return redirect()->back()->with('warning', 'Investment scheme status updated');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       InvestmentScheme::create([

            'name' => $request->name,
            'description'  => $request->description,
            'crypto_id'  => $request->crypto_id,
            'slug'  => Str::slug($request->name),
            'min_amount'  => $request->min_amount,
            'max_amount'  => $request->filled('max_amount') ?  $request->max_amount : 0,
            'terms'  => $request->terms,
            'term_type'  => $request->term_type,
            'rate'  => $request->rate,
            'rate_type'  => $request->rate_type,
            'calc_period'  => $request->calc_period,
            'payout'  => $request->payout

       ]);

        return redirect()->route('admin.iv.schemes')->with('success', 'Investment Scheme Created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvestmentScheme  $investmentScheme
     * @return \Illuminate\Http\Response
     */
    public function show(InvestmentScheme $investmentScheme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestmentScheme  $investmentScheme
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestmentScheme $scheme)
    {
        $cryptos = Crypto::where('active', true)->get();
        return view('admin.iv_schemes.edit', compact('scheme','cryptos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestmentScheme  $investmentScheme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvestmentScheme $scheme)
    {
        $scheme->update($request->all());
        return redirect()->route('admin.iv.schemes')->with('success', ''.$scheme->name.' updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestmentScheme  $investmentScheme
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvestmentScheme $scheme)
    {
        $scheme->delete();
        return redirect()->back()->with('success', ''.$scheme->name.' deleted successfully.');
    }
}
