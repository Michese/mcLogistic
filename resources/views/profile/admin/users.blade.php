@extends('main.wrapper')

@section('title')
    Пользователи
@endsection

@section('content')
    <h1>Пользователи</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th class="table-danger" data-toggle="tooltip" data-placement="right">Номер пользователя</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Телефон</th>
            <th>Уровень доступа</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>
                <select class="custom-select custom-select-sm mb-3">
                    <option value="1" selected>One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </td>
            <td><i class="fas fa-trash-alt"></i></td>
        </tr>
        </tbody>
    </table>

@endsection
