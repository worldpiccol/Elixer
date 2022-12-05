<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Crypto;
use App\Models\BinaryScheme;
use Illuminate\Http\Request;
use Str;

class BinarySchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schemes = BinaryScheme::orderBy('created_at','desc')->get();
        return view('admin.bi_schemes.index', compact('schemes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cryptos = Crypto::where('active', true)->get();
        return view('admin.bi_schemes.create', compact('cryptos'));
    }

    public function status(BinaryScheme $scheme)
    {

        if ($scheme->status ===  'active') {
            $scheme->update(['status' => 'inactive']);
        }else {
            $scheme->update(['status' => 'active']);
        }

        return redirect()->back()->with('warning', 'Binary scheme status updated');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crypto = Crypto::findOrFail($request->crypto_id);
        $slug = $crypto->symbol.' USD';

        BinaryScheme::create([

            'name' => $request->name,
            'description' => $request->description,
            'crypto_id' => $request->crypto_id,
            'slug' => Str::slug($slug),
            'min_amount' => $request->min_amount,
            'max_amount' => $request->filled('max_amount') ?  $request->max_amount : 0,
            'terms' => $request->terms,
            'term_type' => $request->term_type,
            'rate' => $request->rate,
            'outcome' => $request->outcome
        ]);
        return redirect()->route('admin.binary.schemes')->with('success', 'Binary Scheme Created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BinaryScheme  $binaryScheme
     * @return \Illuminate\Http\Response
     */
    public function show(BinaryScheme $binaryScheme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BinaryScheme  $binaryScheme
     * @return \Illuminate\Http\Response
     */
    public function edit(BinaryScheme $scheme)
    {
        $cryptos = Crypto::where('active', true)->get();
        return view('admin.bi_schemes.edit', compact('scheme','cryptos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BinaryScheme  $binaryScheme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BinaryScheme $scheme)
    {
        $crypto = Crypto::findOrFail($request->crypto_id);
        $slug = $crypto->symbol.' USD';

        $scheme->update([

            'name' => $request->name,
            'description' => $request->description,
            'crypto_id' => $request->crypto_id,
            'slug' => Str::slug($slug),
            'min_amount' => $request->min_amount,
            'max_amount' => $request->filled('max_amount') ?  $request->max_amount : 0,
            'terms' => $request->terms,
            'term_type' => $request->term_type,
            'rate' => $request->rate,
            'outcome' => $request->outcome
        ]);

        return redirect()->route('admin.binary.schemes')->with('success', ''.$scheme->name.' updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BinaryScheme  $binaryScheme
     * @return \Illuminate\Http\Response
     */
    public function destroy(BinaryScheme $scheme)
    {
        $scheme->delete();
        return redirect()->back()->with('success', ''.$scheme->name.' deleted successfully.');
    }
}
