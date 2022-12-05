<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Hash;
use Auth;

class ProfileController extends Controller
{

    public function updatePassword(Request $request)
    {

        $user = User::findOrFail(Auth::user()->id);
        $check  = $user->id === auth()->user()->id;

        if($check) {

            $request->validate([
                'old_password' => 'required',
                'new_password' => ['required','confirmed', 'string' , Password::min(8)->letters()],
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $use)
    {
        return view('admin.profile.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
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


}
