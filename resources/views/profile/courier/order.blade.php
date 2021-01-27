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

        @forelse($courierOrders as $courierOrder)
            <tr id="{{ $courierOrder->order->order_id }}">
                <td class="poster">
                    {{ $courierOrder->order->order_id }}
                    <div class="card descr" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">Адрес получения</h3>
                            <p class="card-text">{{ $courierOrder->order->sending_address }}</p>
                            <h3 class="card-title">Адрес доставки</h3>
                            <p class="card-text">{{ $courierOrder->order->delivery_address }}</p>
                            <h3 class="card-title">Габариты груза</h3>
                            <p class="card-text">Ширина: {{ $courierOrder->order->cargo->width }}, м</p>
                            <p class="card-text">Высота: {{ $courierOrder->order->cargo->height }}, м</p>
                            <p class="card-text">Длина: {{ $courierOrder->order->cargo->length }}, м</p>
                            <p class="card-text">Вес: {{ $courierOrder->order->cargo->weight }}, кг</p>
                            <p class="card-text">Стоимость: {{ $courierOrder->order->cargo->amount }}, руб</p>
                            <p class="card-text">Способ оплаты: {{ $courierOrder->order->paymentMethod->title }}</p>
                        </div>
                    </div>
                </td>
                <td>{{ $courierOrder->order->sending_date }}</td>
                <td>{{ $courierOrder->order->delivery_date }}</td>
                <td class="orderStatus">{{ $courierOrder->order->orderStatus->title }}</td>
                <td data-status="4" class="status"><i class="fas fa-truck"></i></td>
                <td data-status="5" class="status"><i class="fas fa-truck"></i></td>
                <td data-status="6" class="status"><i class="fas fa-truck"></i></td>
                <td data-status="7" class="status"><i class="fas fa-truck"></i></td>
                <td>{{ $courierOrder->order->amount }}</td>
            </tr>
            @empty
                <tr><td>Пока нет</td></tr>
        @endforelse
        </tbody>
    </table>

    <div class="w-100 d-flex justify-content-center">
        {{ $courierOrders->onEachSide(5)->links() }}
    </div>

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

        @forelse($suggestedOrders as $suggestedOrder)
            <tr>

                <td class="poster">
                    {{ $suggestedOrder->order->order_id }}
                    <div class="card descr" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">Адрес получения</h3>
                            <p class="card-text">{{ $suggestedOrder->order->sending_address }}</p>
                            <h3 class="card-title">Адрес доставки</h3>
                            <p class="card-text">{{ $suggestedOrder->order->delivery_address }}</p>
                            <h3 class="card-title">Габариты груза</h3>
                            <p class="card-text">Ширина: {{ $suggestedOrder->order->cargo->width }}, м</p>
                            <p class="card-text">Высота: {{ $suggestedOrder->order->cargo->height }}, м</p>
                            <p class="card-text">Длина: {{ $suggestedOrder->order->cargo->length }}, м</p>
                            <p class="card-text">Вес: {{ $suggestedOrder->order->cargo->weight }}, кг</p>
                            <p class="card-text">Стоимость: {{ $suggestedOrder->order->cargo->amount }}, руб</p>
                            <p class="card-text">Способ оплаты: {{ $suggestedOrder->order->paymentMethod->title }}</p>
                        </div>
                    </div>
                </td>
                <td>{{ $suggestedOrder->order->sending_date }}</td>
                <td>{{ $suggestedOrder->order->delivery_date }}</td>

                <td>
                    <form action="{{ route('profile.courier.order.add') }}" method="post">
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $suggestedOrder->order->order_id }}">
                        <button type="submit"><i class="fas fa-truck"></i></button>
                    </form>

                </td>
                <td>{{ $suggestedOrder->order->amount }}</td>
            </tr>
        @empty
            <tr><td>Пока нет</td></tr>
        @endforelse
        </tbody>
    </table>
    <div class="w-100 d-flex justify-content-center">
        {{ $suggestedOrders->onEachSide(5)->links() }}
    </div>

    <script>
        const statuses = document.querySelectorAll('.status');

        statuses.forEach(status => {
            status.addEventListener('click', () => {
                const status_id = status.dataset.status;
                const tr = status.parentNode;
                const order_id = tr.id;

                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        status_id: status_id,
                        order_id: order_id,
                    },
                    url: "{{ route('profile.courier.order.change') }}",
                    dataType: 'json',
                    success: function (response) {
                        const orderStatus = tr.querySelector('.orderStatus');
                        orderStatus.textContent = response.title;
                        console.log(response.title);
                    }
                });
            })
        })
    </script>
@endsection
