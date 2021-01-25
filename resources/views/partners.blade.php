@extends('main.wrapper')

@section('title')
    Партнерам
@endsection

@section('content')
    <h1>Партнерам</h1>
    <section>
        <h2>Учредительная документация</h2>
        <ul>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Текстовый док 1</a></li>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Текстовый док 2</a></li>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Текстовый док 3</a></li>
        </ul>

    </section>
    <section>
        <h2>Договоры</h2>
        <ul>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Договор 1</a></li>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Договор 2</a></li>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Договор 3</a></li>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Договор 4</a></li>
        </ul>
    </section>
    <section>
        <h2>Специальные предложения</h2>
        <ul>
            <li><a href="{{ asset('documentation/акции.txt') }}" download>Предложения</a></li>
        </ul>
    </section>
    <section>
        <h2>Наши партнеры</h2>
        <article class="row d-flex justify-content-between flex-wrap">
            @foreach($partners as $partner)
                    <div class="card margin-top-20" style="width: 18rem;">
                        <img src="{{ $partner->src }}" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $partner->title }}</h5>
                            <p class="card-text">{{ $partner->description }}</p>
                            @if(!is_null($partner->link))
                                <a href="{{ $partner->link }}" class="btn btn-primary">Перейти</a>
                            @endif
                        </div>
                    </div>
            @endforeach
        </article>
    </section>
@endsection
