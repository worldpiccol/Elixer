<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Crypto;
use App\Models\WithdrawWallet;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Hash;
use Auth;

class AccountController extends Controller
{


    public function show()
    {
        return view('user.account.show');
    }

    public function password()
    {
        return view('user.account.password');
    }

    public function wallets()
    {
        $wallets = Auth::user()->withdrawWallets;
        $cryptos = Crypto::where('active', true)->get();

        return view('user.account.wallets', compact('wallets', 'cryptos'));
    }


    public function updatePassword(Request $request)
    {

        $user = User::findOrFail(Auth::user()->id);
        $check  = $user->id === auth()->user()->id;

        if($check) {

            $request->validate([
                'old_password' => 'required',
                'new_password' => ['required','confirmed', 'string' , Password::min(8)->letters()->symbols()->uncompromised()],
            ]);


            if(!Hash::check($request->old_password, auth()->user()->password)){
                return back()->with("danger", "Old Password Doesn't match!");
            }

            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);

            return back()->with("success", "Password updated successfully!");

        }
    }

    public function update(Request $request)
    {

        $user = User::findOrFail(Auth::user()->id);
        $check  = $user->id === auth()->user()->id;
        if ($check) {

            $request->validate([
                'name' => 'required|string',
                'email' => [
                            'required',
                            'email',
                            Rule::unique('users')->ignore($user->id, 'id')
                        ],
                'username' => [
                            'required',
                            'string',
                            Rule::unique('users')->ignore($user->username, 'username')
                        ],
            ]);

            if ($user->update($request->all())) {

                return redirect()->back()->with('success', 'Account Updated Successfully.');
            }
        }
    }


    public function addWallet(Request $request)
    {
       $val = $request->validate([
            'title' => 'required',
            'address' => 'required',
            'crypto' => 'required',
       ]);

       if ($val) {

            WithdrawWallet::create([
                'title' => $request->title,
                'address' => $request->address,
                'crypto_id' => $request->crypto,
                'user_id' => Auth::user()->id,
            ]);

            return back()->with("success", "Wallet Details Added");
       }

        return back()->with("danger", "We could not add your wallet address, Please check that you filled all the details and try again.");
    }
}
