<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForexInvestController extends Controller
{
    public function index()
    {
        return view('user.forex.index');
    }
}
