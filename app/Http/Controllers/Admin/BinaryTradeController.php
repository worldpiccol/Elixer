<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trade;
use Illuminate\Http\Request;

class BinaryTradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trades = Trade::orderBy('created_at', 'desc')->get();
        return view('admin.binary.index', compact('trades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BinaryTrade  $binaryTrade
     * @return \Illuminate\Http\Response
     */
    public function show(BinaryTrade $binaryTrade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BinaryTrade  $binaryTrade
     * @return \Illuminate\Http\Response
     */
    public function edit(BinaryTrade $binaryTrade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BinaryTrade  $binaryTrade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BinaryTrade $binaryTrade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BinaryTrade  $binaryTrade
     * @return \Illuminate\Http\Response
     */
    public function destroy(BinaryTrade $binaryTrade)
    {
        //
    }
}
