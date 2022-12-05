<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;

class AjaxController extends Controller
{
     public function cmcProxy($cryptos)
    {
        $apy_key = env('CMC_API_KEY');
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest';

        $crypto_cmc_ids = $cryptos;

        $response = Http::withHeaders([

            'Accepts' => 'application/json',
            'X-CMC_PRO_API_KEY' =>  $apy_key,

        ])->get($url , [

            'id' => $crypto_cmc_ids,
        ]);

        return response($response);
    }

    public function balance()
    {
        $balances = Balance::with('crypto')->where('user_id', Auth::user()->id)->get();

        return response($balances);
    }

    public function investment()
    {
        $invests = Investment::where('user_id', Auth::user()->id)->where('status', 'active')->get();

        return response($invests);
    }
}
