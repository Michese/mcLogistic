@extends('main.wrapper')

@section('title')
    О компании
@endsection

@section('content')
<h1>О компании</h1>

<p>Компания
    @if(Route::has('home'))
        <a href="{{ route('home') }}">MS-logistics</a>
    @else
        MS-logistics
    @endif
    прочно закрепила свое лидерство на рынке логистических услуг. Много
    лет клиенты
    доверяют нам перевозку грузов по Москве и Московской области.</p>

<p>Удобный
    @if(Route::has('calculationСost'))
        <a href="{{ route('calculationСost') }}">Расчет стоимости</a>
    @else
        Расчет стоимости
    @endif

    заказа и онлайн

    @if(Route::has('order'))
        <a href="{{ route('order') }}">Оформление заказа</a>
    @else
        Оформление заказа
    @endif

    позволяет нашим
    клиентам быстро, удобно и безопасно пользоваться услугами компании
    @if(Route::has('home'))
    <a href="{{ route('home') }}">MS-logistics</a>
    @else
        MS-logistics
    @endif

    .</p>

<section>
    <h2 class="text-xl-center">Безопасность перевозок обеспечивается:</h2>
    <ul>
        <li>Современным оборудованием (специализированные автомобили с крепежным оборудованием и системой
            бережной перевозки);
        </li>
        <li>Профессиональными сотрудниками (опытные водители, специалисты по погрузочно-разгрузочным работам,
            мастера по установке бытовой техники и окон);
        </li>
        <li>Передовые технологии (современные ударопрочные материалы для упаковки грузов).</li>
    </ul>
</section>
{{-- TODO --}}
<p>Доставка грузов осуществляется по нескольким категориям. Подробнее ознакомиться с перечнем оказываемых услуг
    можно в разделе

    @if(Route::has('calculation.cost'))
        <a href="{{ route('calculation.cost') }}">Расчет стоимости</a>
    @else
        Расчет стоимости
    @endif
    .</p>

<p>Сотрудничество с крупными магазинами позволяет оперативно и качественно доставлять различные грузы.</p>
<section>
    <h2 class="text-xl-center">Наши партнеры:</h2>
    <!--            // взять лого с сайта-->
</section>

<p>Если Вы хотите стать партнером нашей компании, перейдите в раздел

    @if(Route::has('partners'))
        <a href="{{ route('partners') }}">Партнерам</a>
    @else
        Партнерам
    @endif
    .</p>
<p>Здесь находится вся информация об условиях сотрудничества.</p>
<section>
    <p>
        Специальные предложения и акции позволяют нашим клиентам экономить на доставке без потери качества и
        скорости перевозок.
    </p>
    <p>
        Если у Вас возникли какие-то вопросы, перейдите в раздел

        @if(Route::has('contacts'))
            <a href="{{ route('contacts') }}">Контакты</a>
        @else
            Контакты
        @endif

        и свяжитесь с
        нами любым удобным способом.
    </p>
</section>
@endsection
