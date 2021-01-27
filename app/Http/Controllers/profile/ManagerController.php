<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\CourierOrder;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\SuggestedOrder;
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

    public function monitoring(Order $order)
    {
        $orders = $order->getOrdersForMonitoringPage();
        $orderStatuses = OrderStatus::all();
        return view('profile.manager.monitoring', [
            'orders' => $orders,
            'orderStatuses' => $orderStatuses
        ]);
    }

    public function change(Request $request)
    {
        $orderStatusId = $request->post('order_status_id');
        if($orderStatusId != 1) {
            $order = Order::find($request->post('order_id'));
            $order->order_status_id = $orderStatusId;
            if($orderStatusId == 2) {
                CourierOrder::where([
                    'user_id' => $order->courier_id,
                    'order_id' => $order->order_id,
                    ])->delete();
                $order->courier_id = null;
            }
            $order->save();
        }
        return redirect()->route('profile.manager.monitoring');
    }

    public function cancel(Request $request)
    {
        $order = Order::find($request->post('order_id'));
        $order->order_status_id = 8;
        $order->save();
        return redirect()->route('profile.manager.monitoring');
    }

    public function sendToCouriers(Request $request, Order $model)
    {
        $sendToUsers = json_decode($request->post('jsform'))->sendToUsers;
        if(count($sendToUsers) > 1) {
            foreach ($sendToUsers as $user_id) {
                SuggestedOrder::create([
                    'user_id' => $user_id,
                    'order_id' => $request->post('order_id'),
                ]);
            }
            $order = Order::find($request->post('order_id'));
            $order->order_status_id = 2;
        } elseif (count($sendToUsers) == 1) {
            $order = Order::find($request->post('order_id'));
            $order->courier_id = $sendToUsers[0];
            $order->order_status_id = 3;
            $order->save();

            CourierOrder::create([
                'user_id' => $sendToUsers[0],
                'order_id' => $order->order_id,
            ]);
        } else {
            return redirect()->route('profile.manager.order')
                ->withErrors('Добавте курьеров!');
        }
        return 'success';
    }
}
