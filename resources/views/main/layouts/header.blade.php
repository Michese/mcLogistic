<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    @if(Route::has('home'))
        <a class="navbar-brand" href="{{ route('home') }}">mcLogistic</a>
    @endif

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse header_nav" id="navbarNav">
        <ul class="navbar-nav">
            @if(Route::has('home'))
                @if(Route::is('home'))
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Главная</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Главная</a>
                    </li>
                @endif
            @endif

            @if(Route::has('about'))

                @if(Route::is('about'))
                    <li class="nav-item active">
                        <a class="nav-link" href="#">О компании</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">О компании</a>
                    </li>
                @endif
            @endif

            @if(Route::has('contacts'))
                @if(Route::is('contacts'))
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts') }}">Контакты</a>
                    </li>
                @endif
            @endif

            @if(Route::has('calculation.cost'))
                @if(Route::is('calculation.cost'))
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Расчет стоимости</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('calculation.cost') }}">Расчет стоимости</a>
                    </li>
                @endif
            @endif

            @if(Route::has('partners'))
                @if(Route::is('partners'))
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Партнерам</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('partners') }}">Партнерам</a>
                    </li>
                @endif
            @endif

            @if(Route::has('order'))
                @if(Route::is('order'))
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Оформить заказ</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('order') }}">Оформить заказ</a>
                    </li>
                @endif
            @endif

            @if(Route::has('feedback'))
                @if(Route::is('feedback'))
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Отзывы</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('feedback') }}">Отзывы</a>
                    </li>
                @endif
            @endif

        </ul>


        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="dropdown dropleft">
                    <a class="btn btn-primary btn-sm dropdown-toggle" href="#" role="button"
                       id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Олег
                        <span class="text-light bg-dark rounded-circle p-1">2</span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @if(Route::has('profile.client.order'))
                            <a class="dropdown-item" href="{{ route('profile.client.order') }}">Мои заказы</a>
                        @endif

                        @if(Route::has('profile.courier.order'))
                            <a class="dropdown-item" href="{{ route('profile.courier.order') }}">Мои заказы</a>
                        @endif

                        @if(Route::has('profile.manager.order'))
                            <a class="dropdown-item" href="{{ route('profile.manager.order') }}">Мои заказы</a>
                        @endif

                        @if(Route::has('profile.manager.monitoring'))
                            <a class="dropdown-item" href="{{ route('profile.manager.monitoring') }}">Заказы</a>
                        @endif

                            @if(Route::has('profile.admin.users'))
                                <a class="dropdown-item" href="{{ route('profile.admin.users') }}">Пользователи</a>
                            @endif

                        @if(Route::has('profile.index'))
                            <a class="dropdown-item" href="{{ route('profile.index') }}">Личный кабинет</a>
                        @endif

                        @if(Route::has('auth.logout'))
                            <a class="dropdown-item" href="{{ route('auth.logout') }}">Выйти</a>
                        @endif
                    </div>
                </div>
            </li>

            @if(Route::has('auth.login'))
                @if(Route::is('auth.login'))
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Войти</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.login') }}">Войти</a>
                    </li>
                @endif
            @endif

            @if(Route::has('auth.register'))
                @if(Route::is('auth.register'))
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Регистрация</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.register') }}">Регистрация</a>
                    </li>
                @endif
            @endif
        </ul>
    </div>
</nav>
