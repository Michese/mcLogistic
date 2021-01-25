<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function partners()
    {
        $partners = Partner::all();
        return view('partners', [
            'partners' => $partners,
        ]);
    }
}
