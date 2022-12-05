<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockInvestController extends Controller
{
    public function index()
    {
        return view('user.stocks.index');
    }
}
