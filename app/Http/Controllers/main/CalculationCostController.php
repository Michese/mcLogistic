<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use App\Models\TypeCargo;
use Illuminate\Http\Request;

class CalculationCostController extends Controller
{
    public function calculationCost()
    {
        $typeCargos = TypeCargo::all();
        return view('calculationСost', [
            'typeCargos' => $typeCargos,
        ]);
    }

    public function calculateAdd(Request $request)
    {
        $total = 0.0;
        $tariff = 1.0;
        $volume = $request->post('height') * $request->post('length') * $request->post('width');
        $density = $request->post('weight') / $volume;

        if ($density > 250.0) {
            $total = $request->post('weight') * $tariff;
        } else {
            $total = 250.0 * $volume * $tariff;
        }

        $amount = $request->post('amount');
        if($request->post('has_insurance') == 'on') {
            if($amount < 2000) {
                $total += 35;
            } else if ($amount < 50000) {
                $total += 50;
            } else if ($amount >= 50000) {
                $total += $amount * 0.01;
            }
        }

        if($request->post('has_filling_up') == 'on') {
            $total += 30;
        }

        if ($request->post('has_supporting_documents') == 'on') {
            $total += 100;
        }

        if($request->post('has_return_documents') == 'on') {
            $total += 200;
        }

        return $total;
    }
}
