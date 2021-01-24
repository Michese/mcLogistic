@extends('main.wrapper')

@section('title')
    Главная
@endsection

@section('content')
<h1>Главная</h1>
<section class="border border-danger main-color-section">
    <h2 class="text-xl-center">Акции</h2>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/640x240" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/640x240 " class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/640x240 " class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
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
<section class="border border-danger main-color-section">
    <h2 class="text-xl-center">Алгоритм доставки груза</h2>
    <ol>
        <li>Оформление заказа</li>
        <li>Подтверждение заказа</li>
        <li>Доставка и оплата</li>
        <li>Получение товара</li>
    </ol>
</section>
<section class="border border-danger main-color-section">
    <h2 class="text-xl-center">Документация</h2>
    <ul>
        <li><a href="{{ asset('documentation/акции.txt') }}" download>Погрузо-разгрузочные работы</a></li>
        <li><a href="{{ asset('documentation/акции.txt') }}" download>Упаковка</a></li>
        <li><a href="{{ asset('documentation/акции.txt') }}" download>Страхование</a></li>
        <li><a href="{{ asset('documentation/акции.txt') }}" download>Доставка из продовольственных магазинов</a></li>
        <li><a href="{{ asset('documentation/акции.txt') }}" download>Документация</a></li>
    </ul>
</section>

@endsection
