@extends('main.wrapper')

@section('title')
    Главная
@endsection

@section('content')
    <h1>Главная</h1>
    <section class="border border-primary main-color-section">
        <h2 class="text-xl-center">Акции</h2>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($events as $event)
                    @if ($loop->first)
                        <div class="carousel-item active">
                            <img src="{{ $event->src }}" class="d-block w-100" alt="image">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $event->title }}</h5>
                                <p>{{ $event->description }}</p>
                            </div>
                        </div>
                    @else
                        <div class="carousel-item ">
                            <img src="{{ $event->src }}" class="d-block w-100" alt="image">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $event->title }}</h5>
                                <p>{{ $event->description }}</p>
                            </div>
                            
                        </div>
                    @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="border border-primary main-color-section">
        <h2 class="text-xl-center">Алгоритм доставки груза</h2>
        <ol>
            <li>Оформление заказа</li>
            <li>Подтверждение заказа</li>
            <li>Доставка и оплата</li>
            <li>Получение товара</li>
        </ol>
    </section>
    <section class="border border-primary main-color-section" id="documentation">
        <h2 class="text-xl-center">Документация</h2>
        <ul>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Погрузо-разгрузочные работы</a></li>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Упаковка</a></li>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Страхование</a></li>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Доставка из продовольственных магазинов</a>
            </li>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Документация</a></li>
        </ul>
    </section>

@endsection
