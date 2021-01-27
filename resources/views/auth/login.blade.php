@extends('main.wrapper')

@section('title')
    Войти
@endsection

@section('content')

    <form class="d-flex justify-content-center align-content-center" action="{{ route('auth.login') }}" method="post">
        @csrf
        <article class="d-flex flex-column col-6">
            <h1 class="align-self-center">Войти</h1>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember" >
                <label class="form-check-label" for="rememberMe" >Запомнить логин</label>
            </div>
            <button type="submit" class="btn btn-primary align-self-center">Войти</button>
            @if ($errors->any())
                <div class="alert alert-danger margin-top-20">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="d-flex justify-content-around margin-top-20">
                <div class="d-flex justify-content-center align-items-center pt-1 social-button bg-primary border rounded-circle">
                    <a href="{{ route('auth.socialite.vk') }}" class="text-light"><i class="fab fa-vk"></i></a>
                </div>

            </div>
        </article>
    </form>

@endsection
