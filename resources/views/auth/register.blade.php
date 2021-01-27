@extends('main.wrapper')

@section('title')
    Регистрация
@endsection

@section('head')
    <!--    dadata      -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/css/suggestions.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/js/jquery.suggestions.min.js"></script>
@endsection

@section('content')
    <form class="d-flex justify-content-center align-content-center" action="{{ route('auth.register') }}" method="post">
        @csrf
        <article class="d-flex flex-column col-6">
            <h1 class="align-self-center">Регистрация</h1>
            <div class="form-group">
                <label for="name">ФИО</label>
                <input type="text" class="form-control" id="fullname" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="tel" class="form-control" name="phone" id="phone">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Повторите пароль</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary align-self-center">Зарегистрироваться</button>

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
