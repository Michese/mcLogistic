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
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js" defer></script>
    <title>Главная</title>
</head>
<body>
<div class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                            <a class="btn btn-secondary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Олег
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
    <main>

        <form class="d-flex justify-content-center align-content-center" action="#" method="post">

            <article class="d-flex flex-column col-6">
                <h1 class="align-self-center">Личный кабинет</h1>

                <div class="form-group">
                    <label for="exampleInputEmail1">ФИО*</label>
                    <input type="text" class="form-control" id="fullname" value="Олег">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email*</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="example@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Телефон*</label>
                    <input type="tel" class="form-control" value="+7 900 888 88 88">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Новый пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Текущий пароль*</label>
                    <input type="password" class="form-control" id="exampleInputPassword2">
                </div>
                <button type="submit" class="btn btn-primary align-self-center">Сохранить</button>
            </article>
        </form>
    </main>
    <footer>
        <hr>
        <p class="text-xl-center">2021</p>
    </footer>
</div>
</body>

<script>

    $("#fullname").suggestions({
        token: "d6097cd2b54bebb53f5dc6707398488706079aec",
        type: "NAME",
        onSelect: function (suggestion) {
            console.log(suggestion);
        }
    });
</script>

</html>
