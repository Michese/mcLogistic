@extends('main.wrapper')

@section('title')
    Профиль
@endsection

@section('content')

    <form class="d-flex justify-content-center align-content-center" action="{{ route('profile.edit') }}" method="post">
        @csrf
        <article class="d-flex flex-column col-6">
            <h1 class="align-self-center">Личный кабинет</h1>

            <div class="form-group">
                <label for="fullname">Имя*</label>
                <input type="text" class="form-control" id="fullname" value="{{ Auth::user()->name }}" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                       value="{{ Auth::user()->email }}" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Телефон*</label>
                <input type="tel" class="form-control" value="{{ Auth::user()->phone }}" name="phone" id="phone" required>
            </div>
            <div class="form-group">
                <label for="password">Новый пароль</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="currentPassword">Текущий пароль*</label>
                <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
            </div>
            <button type="submit" class="btn btn-primary align-self-center">Сохранить</button>
            @if ($errors->any())
                <div class="alert alert-danger margin-top-20">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </article>
    </form>
    <script>

        $("#fullname").suggestions({
            token: "d6097cd2b54bebb53f5dc6707398488706079aec",
            type: "NAME",
            onSelect: function (suggestion) {
                console.log(suggestion);
            }
        });
    </script>

@endsection
