<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Investment;
use App\Models\User;
use App\Models\Trade;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $latest_transactions = Transaction::where('user_id', Auth::user()->id)->orderBy('created_at','desc')->limit(6)->get();
        return view('user.home', compact('latest_transactions'));
    }

    public function admin()
    {
        $users = User::all()->count();
        $trades = Trade::all()->count();
        $invests = Investment::all()->count();
        return view('admin.dashboard', compact('users','trades','invests'));
    }
}
