<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile.profile');
    }

    public function edit(ProfileRequest $request)
    {

        Auth::user()->name = $request->post('name');
        Auth::user()->email = $request->post('email');
        Auth::user()->phone = $request->post('phone');
        if (!is_null($request->post('password')) && !empty($request->post('password'))) {
            Auth::user()->password = \Hash::make($request->post('password'));
        }
        Auth::user()->save();
        return redirect()->route('profile.index');
    }
}
