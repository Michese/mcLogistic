<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Access;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::all();
        $accesses = Access::all();
        return view('profile.admin.users', [
            'users' => $users,
            'accesses' => $accesses,
        ]);
    }

    public function edit(Request $request)
    {
        $result = 'fail';
        $access_id = (int)$request->post('access_id');
        $user_id = (int)$request->post('user_id');
        if ($access_id != 4 && $user_id != 1) {

            $user = User::find($user_id);
            $name = $request->post('name');
            $email = $request->post('email');
            $user->access_id = $access_id;
            $user->name = $name;
            $user->email = $email;
            $user->save();
            $result = 'success';
        }
        return $result;
    }

    public function delete(Request $request)
    {
        $user_id = (int)$request->post('user_id');
        if($user_id != 1) {
            $user = User::find($user_id);
            $user->delete();
        }
        return redirect()->route('profile.admin.users');
    }
}
