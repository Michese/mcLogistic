<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\CourierOrder;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\SuggestedOrder;
use App\Models\User;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    public function order(CourierOrder $courierOrder, SuggestedOrder $suggestedOrder)
    {
        $suggestedOrders = $suggestedOrder->getAllSuggestedOrderForCourierOrderPage(\Auth::id());
        $courierOrders = $courierOrder->getOrdersByCourierId(\Auth::id());
        return view('profile.courier.order', [
            'courierOrders' => $courierOrders,
            'suggestedOrders' => $suggestedOrders
        ]);
    }

    public function add(Request $request, SuggestedOrder $suggestedOrder)
    {
        $redirect = redirect()->route('profile.courier.order');
        $order_id = $request->post('order_id');
        $order = Order::find($order_id);
        if (is_null($order->courier_id)) {
            $suggestedOrder->deleteSuggestedOrdersByOrderId($order_id);
            $order->courier_id = \Auth::id();
            $order->order_status_id = 3;
            $order->save();

            CourierOrder::create([
                'user_id' => \Auth::id(),
                'order_id' => $order_id,
            ]);
        } else {
            $redirect = $redirect->withErrors('Что-то пошло не так!');
        }

        return $redirect;
    }

    public function changeStatusOrder(Request $request)
    {
        $orderStatusId = $request->post('status_id');
        $order = Order::find($request->post('order_id'));
        if($order->order_status_id < $orderStatusId) {
            $order->order_status_id = $orderStatusId;
            $order->save();
            if($order->order_status_id == 7) {
                $courierOrder = CourierOrder::query()
                    ->where(['user_id' => \Auth::id(), 'order_id' => $order->order_id]);
                $courierOrder->delete();
            }
        }
        return  $order->orderStatus;
    }
}
