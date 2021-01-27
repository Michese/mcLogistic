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

    public function create(CreateOrderRequest $request, Cargo $model)
    {
        $model->fill([
            'type_cargo_id' => $request->post('type_cargo_id'),
            'length' => $request->post('length'),
            'width' => $request->post('width'),
            'height' => $request->post('height'),
            'weight' => $request->post('weight'),
            'amount' => $request->post('amount'),
            'comment' => $request->post('comment'),
        ])->save();

        $pp = 40.0; // расстояние (Москва)
        $c = 24.0; // скорость

        // суммарное время загрузки транспортного средства с максимальным
        // использованием его грузоподъемности и объема кузова и полной разгрузки груза, мин.
        $vpr = 20.0;

        $gr = 1; // грузоподъемность TODO
        $kg = 0.8;
        $sce = 69.72; // сметная цена на эксплуатацию транспортного средства, руб. / маш.ч TODO

        $fond = 200000.0;  // фонд оплаты труда
        $nr = ($fond * 120.0) / 100.0; // Накладные расходы, руб.
        $cp = ($fond * 65.0) / 100.0; // Сметная прибыль, руб.

        $st = ((((((($pp * 2.0) / $c) * 60.0 + $vpr)) / 60.0) * $sce) / ($gr * $kg));
        // + $nr + $cp

        Order::create([
            'user_id' => \Auth::id(),
            'cargo_id' => $model->cargo_id,
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
            'amount' => $st,
        ]);

        return redirect()->route('profile.client.order');
    }
}
