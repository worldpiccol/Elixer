<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Referral;
use App\Events\RegistrationSuccess;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm(Request $request)
    {
        if ($request->has('ref')) {
            // session(['referrer' => $request->query('ref')]);
            session()->put(['referrer' => $request->query('ref')]);
        }

        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', ''],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string','confirmed', Password::min(8)->letters()->symbols()->uncompromised()],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $referrer = session()->get('referrer');

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'refer_by' => $referrer ? $referrer : null,
            'referral_code' => Str::upper(Str::random(10)),
            'avarta' =>  "https://avatars.dicebear.com/api/pixel-art/jdenticon/human/".$data['gender']."/".str::random(5).".svg",
            'user_id' => random_int(1000000, 9999999),
            'password' => Hash::make($data['password']),
        ]);


        if (isset($referrer)) {

            $refer_user = User::where('referral_code', $referrer)->first();

            Referral::create([

                'user_id' => $user->id,
                'refer_by' =>  $refer_user->id,
                'join_at' => now(),

            ]);
        }

        // Account::create(['user_id' => $user->id, 'account_type' => 'main-balance',]);
        RegistrationSuccess::dispatch($user);

        return $user;

    }
}
