@extends('main.wrapper')

@section('title')
    Заказы
@endsection

@section('content')
    <h1>Заказы</h1>

    <h2 class="text-xl-center">Мои заказы</h2>

    <table class="table table-hover">
        <thead>
        <tr>
            <th class="table-danger" data-toggle="tooltip" data-placement="right" title='gesg<br>gesg'>Номер заказа</th>
            <th class="poster">
                Время отправки
            </th>
            <th>Примерное время доставки</th>
            <th>Статус заказа</th>
            <th>Еду в пункт А</th>
            <th>Груз принят</th>
            <th>Еду в пункт B</th>
            <th>Груз доставлен</th>
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
                <td>{{ $order->orderStatus->title }}</td>
                <td><i class="fas fa-truck"></i></td>
                <td><i class="fas fa-truck"></i></td>
                <td><i class="fas fa-truck"></i></td>
                <td><i class="fas fa-truck"></i></td>
                <td>{{ $order->amount }}</td>
            </tr>
            @empty
                <tr><td>Пока нет</td></tr>
        @endforelse
        </tbody>
    </table>

    <h2 class="text-xl-center">Предложенные заказы</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="table-danger" data-toggle="tooltip" data-placement="right" title='gesg<br>gesg'>Номер заказа</th>
            <th>Время отправки</th>
            <th>Примерное время доставки</th>
            <th>Принять заказ</th>
            <th>Сумма</th>
        </tr>
        </thead>
        <tbody>

        @forelse($suggestedOrders as $order)
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
                <td><i class="fas fa-truck"></i></td>
                <td>{{ $order->amount }}</td>
            </tr>
        @empty
            <tr><td>Пока нет</td></tr>
        @endforelse
        </tbody>
    </table>
@endsection
