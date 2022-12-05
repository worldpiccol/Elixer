<?php

namespace App\Listeners;

use App\Events\RegistrationSuccess;
use App\Models\Crypto;
use App\Models\Balance;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GenerateWallets
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\RegistrationSuccess  $event
     * @return void
     */
    public function handle(RegistrationSuccess $event)
    {
        $user_id = $event->user->id;
        $d_cryptos = Crypto::where('active',true)->get();

        foreach ($d_cryptos as $key => $crypto) {

            Balance::create([
                'crypto_id' => $crypto->id,
                'balance_ref' => random_int(10000000, 99999999),
                'user_id' => $user_id,
            ]);
        }
    }
}
