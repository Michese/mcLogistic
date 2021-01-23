<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/css/suggestions.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/js/jquery.suggestions.min.js"></script>

    <title>Контакты</title>
</head>
<body>
<div class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.html">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.html">О компании</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Контакты</a>
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
            </div>
        </nav>
    </header>
    <main>
        <h1>Контакты</h1>
        <p>Мы всегда рады видеть Вас в нашем офисе: г. Москва, ул. Совхозная, д.41</p>

        <h2>График работы офиса:</h2>
        <ul>
            <li>Понедельник 9.00-21.00</li>
            <li>Вторник 9.00-21.00</li>
            <li>Среда 9.00-21.00</li>
            <li>Четверг 9.00-21.00</li>
            <li>Пятница 9.00-21.00</li>
            <li>Суббота 9.00-18.00</li>
            <li>Воскресенье 9.00-18.00</li>
        </ul>

        <p>Телефоны, по которым Вы можете круглосуточно связаться с нами: +7 (800) 988-90-24 +7 (800) 948-24-36</p>

        <p>What’s App: +7 (900) 592-25-45</p>
        <input id="fullname" name="fullname" type="text"/>


        <input id="address" name="address" type="text" class="form-control-sm col-3"/>
        <script>
            const address = document.querySelector('#address');

            $("#address").suggestions({
                token: "d6097cd2b54bebb53f5dc6707398488706079aec",
                type: "ADDRESS",
                onSelect: function (suggestion) {
                    console.log(suggestion);
                }
            });

            $("#fullname").suggestions({
                token: "d6097cd2b54bebb53f5dc6707398488706079aec",
                type: "NAME",
                onSelect: function (suggestion) {
                    console.log(suggestion);
                }
            });
        </script>
    </main>
    <footer>
        <p class="text-xl-center">2021</p>
    </footer>
</div>
</body>
</html>
