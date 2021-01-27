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
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <form action="{{ route('profile.admin.users.delete') }}" method="post">
                @csrf
                <tr id="{{ $user->id }}">
                    <td>{{ $user->id }}</td>
                    <td>
                        <input type="text" class="form-control col-11" name="name" value="{{ $user->name }}" required>
                    </td>
                    <td>
                        <input type="email" class="form-control col-11" name="email" value="{{ $user->email }}"
                               required>
                    </td>
                    <td>
                        <input type="number" class="form-control col-11" name="phone" value="{{ $user->phone }}"
                               required>
                    </td>
                    <td>
                        <select class="custom-select custom-select mb-3" name="access">
                            @foreach($accesses as $access)
                                <option value="{{ $access->access_id }}"
                                        @if( $access->access_id == $user->access_id )
                                        selected
                                    @endif
                                >{{ $access->title }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td><a href="#" class="edit"><i class="fas fa-trash-alt"></i></a></td>
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <td>
                        <input type="submit" value="Удалить" class="btn btn-danger float-right submit">
                    </td>
                </tr>
            </form>
        @endforeach
        </tbody>
    </table>

    <script>
        const editButtons = document.querySelectorAll('.edit');
        const deleteButtons = document.querySelectorAll('.delete');

        editButtons.forEach(submit => {
            submit.addEventListener('click', () => {
                const tr = submit.parentNode.parentNode;
                const name = tr.querySelector('input[name="name"]');
                const email = tr.querySelector('input[name="email"]');
                const phone = tr.querySelector('input[name="phone"]');
                const access = tr.querySelector('select[name="access"]');
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        user_id: tr.id,
                        name: name.value,
                        email: email.value,
                        phone: phone.value,
                        access_id: access.value,
                    },
                    url: "{{ route('profile.admin.users.edit') }}",
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

@endsection
