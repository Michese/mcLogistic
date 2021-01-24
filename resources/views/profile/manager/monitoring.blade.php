@extends('main.wrapper')

@section('title')
    Мониторинг заказов
@endsection

@section('content')
        <h1>Мониторинг заказов</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th class="table-danger"  data-toggle="tooltip" data-placement="right" title='gesg<br>gesg'>Номер заказа</th>
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

            <tr>

                <td class="poster">
                    1
                    <div class="card descr" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">Адрес получения</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <h3 class="card-title">Адрес доставки</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <h3 class="card-title">Габариты груза</h3>
                            <p class="card-text">Ширина: </p>
                            <p class="card-text">Высота: </p>
                            <p class="card-text">Длина: </p>
                            <p class="card-text">Вес: </p>
                        </div>
                    </div>
                </td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>4</td>
                <td><i class="fas fa-truck"></i></td>
                <td>5</td>
            </tr>
            </tbody>
        </table>
@endsection
