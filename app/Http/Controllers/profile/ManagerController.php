<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function order()
    {
        return view('profile.manager.order');
    }

    public function monitoring()
    {
        return view('profile.manager.monitoring');
    }
}
