@extends('main.wrapper')

@section('title')
    Мониторинг заказов
@endsection

@section('content')
    <h1>Мониторинг заказов</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th class="table-danger" data-toggle="tooltip" data-placement="right" title='gesg<br>gesg'>Номер заказа</th>
            <th class="poster">
                Время отправки
            </th>
            <th>Примерное время доставки</th>
            <th>Телефон курьера</th>
            <th>Статус заказа</th>
            <th>Отменить заказ</th>
            <th>Сумма</th>
        </tr>
        </thead>
        <tbody>
        @forelse($orders as $order)
            <tr>

                <td class="poster">
                    {{ $order->order_id }}
                    <div class="card descr" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">Адрес получения</h3>
                            <p class="card-text">{{ $order->sending_address }}</p>
                            <h3 class="card-title">Адрес доставки</h3>
                            <p class="card-text">{{ $order->delivery_address }}</p>
                            <h3 class="card-title">Габариты груза</h3>
                            <p class="card-text">Ширина: {{ $order->cargo->width }}, м</p>
                            <p class="card-text">Высота: {{ $order->cargo->height }}, м</p>
                            <p class="card-text">Длина: {{ $order->cargo->length }}, м</p>
                            <p class="card-text">Вес: {{ $order->cargo->weight }}, кг</p>
                            <p class="card-text">Стоимость: {{ $order->cargo->amount }}, руб</p>
                            <p class="card-text">Способ оплаты: {{ $order->paymentMethod->title }}</p>
                        </div>
                    </div>
                </td>
                <td>{{ $order->sending_date }}</td>
                <td>{{ $order->delivery_date }}</td>
                <td>
                    @if(!is_null($order->courier) )
                        {{ $order->courier->phone }}
                        @endif
                </td>
                <td>
                    <form name="myForm" action="{{ route('profile.manager.monitoring.change') }}" method="post">
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $order->order_id }}">
                        <select onchange="fireSubmit (event)" class="custom-select custom-select mb-3" name="order_status_id">
                            @foreach($orderStatuses as $orderStatus)
                                <option value="{{ $orderStatus->order_status_id }}"
                                        @if( $orderStatus->order_status_id == $order->order_status_id )
                                        selected
                                    @endif
                                >{{ $orderStatus->title }}</option>
                            @endforeach
                        </select>
                    </form>
                </td>
                <td>
                    <form action="{{ route('profile.manager.monitoring.cancel') }}" method="post">
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $order->order_id }}">
                        <button type="submit">
                            <i class="fas fa-truck"></i>
                        </button>
                    </form>
                </td>
                <td>{{ $order->amount }}</td>
            </tr>

        @empty
            <tr><td>Заказов пока нет</td></tr>
        @endforelse
        </tbody>
    </table>

    <div class="w-100 d-flex justify-content-center">
        {{ $orders->onEachSide(5)->links() }}
    </div>

    <script type="text/javascript">
        fireSubmit = function(event) {
            event.target.parentNode.submit();
        }
    </script>
@endsection
