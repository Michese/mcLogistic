<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUsersRequest;
use App\Models\Access;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::query()
            ->orderByDesc('access_id')
            ->paginate(15);
        $accesses = Access::all();
        return view('profile.admin.users', [
            'users' => $users,
            'accesses' => $accesses,
        ]);
    }

    public function edit(AdminUsersRequest $request)
    {

        $user = User::find($request->post('user_id'));
        $name = $request->post('name');
        $email = $request->post('email');
        $user->access_id = $request->post('access_id');
        $user->name = $name;
        $user->email = $email;
        $user->save();

        return 'success';
    }

    public function delete(Request $request)
    {
        $user_id = (int)$request->post('user_id');
        if ($user_id != 1) {
            $user = User::find($user_id);
            $user->delete();
        }
        return redirect()->route('profile.admin.users');
    }
}
