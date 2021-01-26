<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function order(Order $model)
    {
        $orders = $model->getOrdersByClientId(\Auth::id());

        return view('profile.client.order', [
            'orders' => $orders
        ]);
    }
}
