<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use App\Models\TypeCargo;
use Illuminate\Http\Request;

class CalculationCostController extends Controller
{
    public function calculationСost()
    {
        $typeCargos = TypeCargo::all();
        return view('calculationСost', [
            'typeCargos' => $typeCargos,
        ]);
    }
}
