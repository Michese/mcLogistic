@extends('main.wrapper')

@section('title')
    Мои заказы
@endsection

@section('content')
    <h1 class="align-self-center">Мои заказы</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="table-danger">Номер заказа</th>
            <th>Время отправки</th>
            <th>Примерное время доставки</th>
            <th>Статус заказа</th>
            <th>Сумма</th>
            <th>Способ оплаты</th>
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
                        </div>
                    </div>
                </td>
                <td>{{ $order->sending_date }}</td>
                <td>{{ $order->delivery_date }}</td>
                <td>{{ $order->orderStatus->title }}</td>
                <td>{{ $order->amount }}</td>
                <td>{{ $order->paymentMethod->title }}</td>
            </tr>
        @empty
            <tr>
                <td>Пока нет</td>
            </tr>
        @endforelse
        </tbody>
    </table>

        <div class="w-100 d-flex justify-content-center">
            {{ $orders->onEachSide(5)->links() }}
        </div>

@endsection
