<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Crypto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CryptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cryptos = Crypto::orderBy('created_at', 'desc')->get();
        return view('admin.cryptos.index',compact('cryptos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cryptos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Crypto::create([

            'cmc_id' => $request->cmc_id,
            'name' => $request->name,
            'symbol'  => $request->symbol,
            'slug'  => Str::slug($request->name,'-'),
            'category'  => $request->category,
            'image_url'  => $request->image_url,

        ]);

        return redirect()->back()->with('success', 'Crypto Added successfully.');
    }

    public function status(Crypto $crypto)
    {

        if ($crypto->active) {
            $crypto->update(['active' => false]);
        }else {
            $crypto->update(['active' => true]);
        }

        return redirect()->back()->with('success', 'Crypto updated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crypto  $crypto
     * @return \Illuminate\Http\Response
     */
    public function show(Crypto $crypto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crypto  $crypto
     * @return \Illuminate\Http\Response
     */
    public function edit(Crypto $crypto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crypto  $crypto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crypto $crypto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crypto  $crypto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crypto $crypto)
    {
        $crypto->delete();
        return redirect()->back()->with('danger', 'Crypto deleted successfully.');
    }
}
