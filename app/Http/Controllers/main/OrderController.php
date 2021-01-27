<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOrderRequest;
use App\Models\Cargo;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\TypeCargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Ramsey\Uuid\Type\Integer;

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

    public function create(CreateOrderRequest $request, Cargo $cargo)
    {
        $cargo->fill([
            'type_cargo_id' => $request->post('type_cargo_id'),
            'length' => $request->post('length'),
            'width' => $request->post('width'),
            'height' => $request->post('height'),
            'weight' => $request->post('weight'),
            'amount' => $request->post('amount'),
            'comment' => $request->post('comment'),
        ])->save();

        $total = 0.0;
        $tariff = 1.0;
        $volume = $cargo->height * $cargo->length * $cargo->width;
        $density = $cargo->weight / $volume;

        if ($density > 250.0) {
            $total = $cargo->weight * $tariff;
        } else {
            $total = 250.0 * $volume * $tariff;
        }

        if($request->post('has_insurance') == 'on') {
            if($cargo->amount < 2000) {
                $total += 35;
            } else if ($cargo->amount < 50000) {
                $total += 50;
            } else if ($cargo->amount >= 50000) {
                $total += $cargo->amount * 0.01;
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

        Order::create([
            'user_id' => \Auth::id(),
            'cargo_id' => $cargo->cargo_id,
            'payment_method_id' => $request->post('payment_method_id'),
            'order_status_id' => 1,
            'sending_address' => $request->post('sending_address'),
            'delivery_address' => $request->post('delivery_address'),
            'sending_date' => Date::make($request->post('sending_date') . ' ' . $request->post('sending_time')),
            'delivery_date' => Date::make($request->post('delivery_date') . ' ' . $request->post('delivery_time')),
            'delivery_client_name' => $request->post('delivery_client_name') ?? \Auth::user()->name,
            'delivery_client_phone' => $request->post('delivery_client_phone') ?? \Auth::user()->phone,
            'has_insurance' => ($request->post('has_insurance') == 'on') ? 1 : 0,
            'has_filling_up' => ($request->post('has_filling_up') == 'on') ? 1 : 0,
            'has_supporting_documents' => ($request->post('has_supporting_documents') == 'on') ? 1 : 0,
            'has_return_documents' => ($request->post('has_return_documents') == 'on') ? 1 : 0,
            'amount' => $total,
        ]);

        return redirect()->route('profile.client.order');
    }
}
