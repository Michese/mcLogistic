<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--    dadata      -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/css/suggestions.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/js/jquery.suggestions.min.js"></script>

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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="./index.html">mcLogistic</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse header_nav" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.html">О компании</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contacts.html">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./calculationСost.html">Расчет стоимости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./partners.html">Партнерам</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./order.html">Оформить заказ</a>
                    </li>
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
                                <a class="dropdown-item" href="#">Мои заказы</a>
                                <a class="dropdown-item" href="./profile.html">Личный кабинет</a>
                                <a class="dropdown-item" href="#">Выйти</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="content">
        <h1>Мониторинг заказов</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th class="table-danger"  data-toggle="tooltip" data-placement="right" title='gesg<br>gesg'>Номер заказа</th>
                <th class="poster">
                    Время отправки
                </th>
                <th>Примерное время доставки</th>
                <th>Телефон курьера</th>
                <th>Статус заказа</th>
                <th>Отменить заказ</th>
                <th>Сумма</th>
            </tr>
            </thead>
            <tbody>

            <tr>

                <td class="poster">
                    1
                    <div class="card descr" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">Адрес получения</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <h3 class="card-title">Адрес доставки</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <h3 class="card-title">Габариты груза</h3>
                            <p class="card-text">Ширина: </p>
                            <p class="card-text">Высота: </p>
                            <p class="card-text">Длина: </p>
                            <p class="card-text">Вес: </p>
                        </div>
                    </div>
                </td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>4</td>
                <td><i class="fas fa-truck"></i></td>
                <td>5</td>
            </tr>
            </tbody>
        </table>


    </main>
    <footer class="row bg-dark text-light justify-content-center">
            <div class="row">
                <div class="col-12">
                    <p class="text-xl-center p-2">2021</p>
                </div>
            </div>
    </footer>
</div>
</body>

</html>
