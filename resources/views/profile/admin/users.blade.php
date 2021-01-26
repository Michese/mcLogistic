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

        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>
                    <select class="custom-select custom-select-sm mb-3">
                        @foreach($accesses as $access)
                            <option value="{{ $access->order_status_id }}"
                                    @if( $access->order_status_id == $user->order_status_id )
                                    selected
                                @endif
                            >{{ $access->title }}</option>
                        @endforeach
                    </select>
                </td>
                <td><i class="fas fa-trash-alt"></i></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
