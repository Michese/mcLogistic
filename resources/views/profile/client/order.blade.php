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
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>5</td>
        </tr>
        </tbody>
    </table>
@endsection
