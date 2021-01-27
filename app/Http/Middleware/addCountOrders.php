<?php

namespace App\Http\Middleware;

use App\Models\CourierOrder;
use App\Models\Order;
use Closure;
use Illuminate\Http\Request;

class addCountOrders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(\Auth::check()) {
            if(\Auth::user()->access_id == 2 || \Auth::user()->access_id == 3) {
                view()->share('countOrders', CourierOrder::countByCourierId(\Auth::id()));
            }
            else {
                view()->share('countOrders', Order::countByUserId(\Auth::id()));
            }

        }

        return $next($request);
    }
}
