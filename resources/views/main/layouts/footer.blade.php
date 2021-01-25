
    <ul class="row d-flex justify-content-around align-items-center w-100 p-0">
        @if(Route::has('about'))
                <li class="text-xl-center p-2 list-unstyled">
                    <a class="text-light" href="{{ route('about') }}">О компании</a>
                </li>
        @endif

            @if(Route::has('contacts'))
                <li class="text-xl-center  p-2 list-unstyled">
                    <a class="text-light" href="{{ route('contacts') }}">Контакты</a>
                </li>
            @endif

            @if(Route::has('partners'))
                <li class="text-xl-center  p-2 list-unstyled">
                    <a class="text-light" href="{{ route('partners') }}">Партнерам</a>
                </li>
            @endif

            @if(Route::has('calculation.cost'))
                <li class="text-xl-center  p-2 list-unstyled">
                    <a class="text-light" href="{{ route('calculation.cost') }}">Расчет стоимости</a>
                </li>
            @endif

            @if(Route::has('feedback'))
                <li class="text-xl-center  p-2 list-unstyled">
                    <a class="text-light" href="{{ route('feedback') }}">Отзывы</a>
                </li>
            @endif

            @if(Route::has('home'))
                <li class="text-xl-center  p-2 list-unstyled">
                    <a class="text-light" href="{{ route('home') }}/#documentation">Документация</a>
                </li>
            @endif
    </ul>

