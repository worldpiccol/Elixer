<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Events\RegistrationSuccess;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(20)->create();
        // $users = User::all();

        // foreach ($users as $key => $user) {
        //     RegistrationSuccess::dispatch($user);
        // }

    }
}
