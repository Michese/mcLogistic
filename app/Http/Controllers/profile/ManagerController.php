<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function order(Order $order, User $user)
    {
        $orders = $order->getOrdersForManagerOrderPage();
        $couriers = $user->getAllCouriers();
        return view('profile.manager.order', [
            'orders' => $orders,
            'couriers' => $couriers,
        ]);
    }

    public function monitoring()
    {
        return view('profile.manager.monitoring');
    }
}
