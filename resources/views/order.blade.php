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
    <header class="border border-top-0 border-dark">
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
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="./userOrder.html">Мои заказы</a>
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
        <h1 class="align-self-center">Оформить заказ</h1>
        <form class="d-flex align-content-center flex-column" action="#" method="post">

            <div class="d-flex justify-content-sm-between form-group w-100 row row-cols-6">
                <article class="border border-primary col-5 rounded">
                    <h2>Доставка</h2>
                    <div class="form-group">
                        <label for="address1">Адрес отправки</label>
                        <input type="text" class="form-control" id="address1">
                    </div>
                    <div class="form-group">
                        <label for="address2">Адрес получения</label>
                        <input type="text" class="form-control" id="address2">
                    </div>

                    <div class="form-group">
                        <label for="fullname">ФИО получателя</label>
                        <input type="text" class="form-control" id="fullname">
                    </div>

                    <div class="form-group">
                        <label>Телефон получателя</label>
                        <input type="tel" class="form-control">
                    </div>

                    <div class="form-group">
                        <select class="custom-select custom-select">
                            <option selected>Способ оплаты</option>
                            <option value="1">Банковская карта</option>
                            <option value="2">Наличные</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="appt-date">Дата доставки:</label>
                        <input id="appt-date" type="date" class="form-control" name="date">
                    </div>

                    <div class="form-group">
                        <label for="appt-time">Время доставки: </label>
                        <input id="appt-time" type="time" class="form-control" name="time">
                    </div>

                </article>
                <article class="border border-primary col-5 rounded">
                    <h2>Характеристики груза</h2>
                    <div class="form-group">
                        <select class="custom-select custom-select-sm">
                            <option selected>Тип</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="form-group col-5">
                            <label>Длина, м</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group col-5">
                            <label>Ширина, м</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group col-5">
                            <label>Высота, м</label>
                            <input type="number" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Вес, кг</label>
                        <input type="number" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Примерная стоимость, руб</label>
                        <input type="number" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="validationTextarea">Комментарии по доставке</label>
                        <textarea class="form-control" id="validationTextarea" placeholder="" required></textarea>
                    </div>

                </article>

                <article class="border border-primary col-5 rounded margin-top-20">
                    <h2>Дополнительные услуги</h2>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customControlValidation1">
                        <label class="custom-control-label" for="customControlValidation1">Добавить страховку</label>
                        <div class="invalid-feedback">Example invalid feedback text</div>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customControlValidation2">
                        <label class="custom-control-label" for="customControlValidation2">Опломбировать</label>
                        <div class="invalid-feedback">Example invalid feedback text</div>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customControlValidation3">
                        <label class="custom-control-label" for="customControlValidation3">Организация перевозки
                            сопроводительных документов</label>
                        <div class="invalid-feedback">Example invalid feedback text</div>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customControlValidation4">
                        <label class="custom-control-label" for="customControlValidation4">Возврат документов</label>
                        <div class="invalid-feedback">Example invalid feedback text</div>
                    </div>
                </article>

            </div>


            <div class="form-group col-5">
                <p class="margin-top-20 price text-success">Сумма: <span id="total">0</span></p>
            </div>

            <button type="submit" class="btn btn-primary align-self-center">Подтвердить</button>

        </form>
    </main>
    <footer>
        <hr>
        <p class="text-xl-center">2021</p>
    </footer>
</div>
</body>

<script>

    $("#address1").suggestions({
        token: "d6097cd2b54bebb53f5dc6707398488706079aec",
        type: "ADDRESS",
        onSelect: function (suggestion) {
            console.log(suggestion);
        }
    });

    $("#address2").suggestions({
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

</html>
