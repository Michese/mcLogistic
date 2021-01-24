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

    </section>
@endsection
