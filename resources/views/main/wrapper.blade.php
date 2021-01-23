<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

{{--    @yield('head')--}}

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/all.js"></script>
    <script src="js/app.js" defer></script>

    <title>Главная</title>
</head>
<body>
<div class="container">
    <header>
        @include('main.layouts.header')
    </header>

    <main class="content">
        @yield('content')
    </main>

    <footer class="row bg-dark text-light justify-content-center">
        @include('main.layouts.footer')
    </footer>

</div>
</body>
</html>
