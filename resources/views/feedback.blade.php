<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <nav class="navbar navbar-expand-lg bg-transparent">
            <a class="navbar-brand" href="#">Navbar</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="./feedback.html">Отзывы</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./login.html">Войти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./register.html">Регистрация</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <h1>Отзывы</h1>
        <form class="d-flex justify-content-center align-content-center margin-bottom-20 margin-top-20" action="#" method="post">

            <article class="d-flex flex-column col-6">
                <h2 class="align-self-center">Написать отзыв</h2>
                <div class="form-group">
                    <label >Рейтинг</label>
                    <p>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </p>
                </div>
                <div class="form-group">
                    <label>Достоинства</label>
                    <textarea class="form-control"  placeholder="текст" required></textarea>
                </div>
                <div class="form-group">
                    <label>Недостатки</label>
                    <textarea class="form-control" placeholder="текст" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="validationTextarea">Отзыв</label>
                    <textarea class="form-control" id="validationTextarea" placeholder="текст" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary align-self-end">Отправить</button>
            </article>
        </form>
        <h2 class="text-xl-center">Все отзывы</h2>
        <section class="row">

            <article class="card bg-dark text-light border rounded-sm col-12">
                <div class="card-body">
                    <div class="card-header">
                        <h3>Олег</h3>
                        <p>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </p>
                        <p>20.01.2021 10:05</p>
                    </div>

                    <h4>ДОСТОИНСТВА:</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h4>НЕДОСТАТКИ:</h4>
                    <p>Lorem ipsum dolor sit amet.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias in, nam nostrum perspiciatis sapiente unde!</p>
                </div>

            </article>

            <article class="card bg-dark text-light border rounded-sm col-12">
                <div class="card-body">
                    <h3>Олег</h3>
                    <p>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </p>
                    <p>20.01.2021 10:05</p>
                    <h4>ДОСТОИНСТВА:</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h4>НЕДОСТАТКИ:</h4>
                    <p>Lorem ipsum dolor sit amet.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias in, nam nostrum perspiciatis sapiente unde!</p>
                </div>

            </article>

            <article class="card bg-dark text-light border rounded-sm col-12">
                <div class="card-body">
                    <h3>Олег</h3>
                    <p>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </p>
                    <p>20.01.2021 10:05</p>
                    <h4>ДОСТОИНСТВА:</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h4>НЕДОСТАТКИ:</h4>
                    <p>Lorem ipsum dolor sit amet.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias in, nam nostrum perspiciatis sapiente unde!</p>
                </div>

            </article>
            <article class="card bg-dark text-light border rounded-sm col-12">
                <div class="card-body">
                    <h3>Олег</h3>
                    <p>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </p>
                    <p>20.01.2021 10:05</p>
                    <h4>ДОСТОИНСТВА:</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h4>НЕДОСТАТКИ:</h4>
                    <p>Lorem ipsum dolor sit amet.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias in, nam nostrum perspiciatis sapiente unde!</p>
                </div>

            </article>
        </section>
    </main>
    <footer>
        <hr>
        <p class="text-xl-center">2021</p>
    </footer>
</div>
</body>
</html>
