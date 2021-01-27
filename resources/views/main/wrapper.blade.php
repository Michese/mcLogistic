<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <script src="{{ asset('js/all.js') }}"></script>

    @yield('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <header>
        @include('main.layouts.header')
    </header>

    <main class="content margin-top-30">
        @yield('content')
    </main>

    <footer class="row bg-dark text-light justify-content-center margin-top-30 padding-top-20">
        @include('main.layouts.footer')
    </footer>

</div>
</body>
</html>
