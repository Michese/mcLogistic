@extends('main.wrapper')

@section('title')
    Заказы
@endsection

@section('content')
    <h1>Заказы</h1>
    <section class="row">
        @php($count=1 )
        @forelse($orders as $order)
            <article class="card bg-dark text-light border rounded-sm col-4">
                <div class="card-body">
                    <div class="card-header poster">
                        <h3>Заказ №{{ $order->order_id }}</h3>
                        <p>{{ $order->created_at }}</p>
                        <div class="card bg-light text-dark shadow descr" style="width: 18rem;">
                            <div class="card-body">
                                <h4>Время отправки:</h4>
                                <p>{{ $order->sending_date }}</p>
                                <h4>Адрес отправки:</h4>
                                <p>{{ $order->sending_address }}</p>
                                <h4>Время доставки:</h4>
                                <p>{{ $order->delivery_date }}</p>
                                <h4>Адрес доставки:</h4>
                                <p>{{ $order->delivery_address }}</p>
                                <h4>Габариты груза:</h4>
                                <p>Длина: {{ $order->cargo->length }}</p>
                                <p>Высота: {{ $order->cargo->height }}</p>
                                <p>Ширина: {{ $order->cargo->width }}</p>
                                <p>Вес: {{ $order->cargo->weight }}</p>
                                <p>Примерная стоимость: {{ $order->cargo->amount }}</p>
                                <h4>Сумма: {{ $order->amount }}</h4>
                            </div>
                        </div>
                    </div>
                    <form id="{{ $order->order_id }}">
                        @csrf
                        <div class="order-form-scroll">
                            @forelse($couriers as $courier)
                                <div class="form-check">
                                    <input class="form-check-input check_user" type="checkbox" name="user_id"
                                           value="{{ $courier->id }}" id="user{{$count}}">
                                    <label class="form-check-label" for="user{{ $count++ }}">
                                        {{ $courier->name }}
                                        @if(isset($courier->courierOrders[0]))
                                            (заказов: {{ $courier->courierOrders[0]->countByCourierId($courier->id) }})
                                        @else
                                            (заказов: 0)
                                        @endif
                                    </label>
                                </div>
                            @empty
                                Курьеров пока нет
                            @endforelse
                        </div>
                        <a class="btn btn-primary float-right submit">Поручить</a>
                    </form>

                </div>
            </article>
        @empty
            Пока нет
        @endforelse

        <div class="w-100 d-flex justify-content-center">
            {{ $orders->onEachSide(5)->links() }}
        </div>

        <script>
            const submits = document.querySelectorAll('.submit');

            submits.forEach(submit => {
                submit.addEventListener('click', () => {
                    let count = 0;
                    const form = submit.parentNode;
                    const users = form.querySelectorAll('.check_user')
                    const sendToUsers = [];
                    users.forEach(user => {
                        if (user.checked) {
                            sendToUsers.push(user.value)
                        }
                    })
                    console.log(count)
                    const jsform = JSON.stringify({
                        sendToUsers
                    })
                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            jsform,
                            'order_id': form.id
                        },
                        url: "{{ route('profile.manager.order.send') }}",
                        dataType: 'json',
                        success: function (response) {
                            console.log(response);
                        },
                        fail: function (response) {
                            console.log(response);
                        }
                    });
                })
            });


        </script>
    </section>
@endsection
