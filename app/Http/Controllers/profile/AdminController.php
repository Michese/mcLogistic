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
}
