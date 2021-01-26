@extends('main.wrapper')

@section('title')
    Заказы
@endsection

@section('content')
    <h1>Заказы</h1>
    <section class="row">
        {{ $count=1 }}
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
                    <form action="#">

                        <div class="order-form-scroll">
                            @forelse($couriers as $courier)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="id" value="{{ $courier->id }}" id="user{{$count}}">
                                <label class="form-check-label" for="user{{ $count++ }}">
                                    {{ $courier->name }}
                                     (заказов: {{ $orders[0]->countByUserId($courier->id) }})
                                </label>
                            </div>
                            @empty
                                Курьеров пока нет
                            @endforelse
                        </div>
                        <submit class="btn btn-primary float-right">Отправить</submit>
                    </form>

                </div>
            </article>
        @empty
            Пока нет
        @endforelse

    </section>
@endsection
