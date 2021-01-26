<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    public function order(Order $model)
    {
        $orders = $model->getOrdersByClientId(\Auth::id());
        $suggestedOrders = [];
        return view('profile.courier.order', [
            'orders' => $orders,
            'suggestedOrders' => $suggestedOrders
        ]);
    }
}
