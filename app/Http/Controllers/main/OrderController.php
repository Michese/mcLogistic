<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use App\Models\TypeCargo;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        $typeCargos = TypeCargo::all();
        $paymentMethods = PaymentMethod::all();
        return view('order', [
            'typeCargos' => $typeCargos,
            'paymentMethods' => $paymentMethods
        ]);
    }
}
