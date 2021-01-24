@extends('main.wrapper')

@section('title')
    Отзывы
@endsection

@section('content')
    <h1>Отзывы</h1>
    <form class="d-flex justify-content-center align-content-center margin-bottom-20 margin-top-20" action="#"
          method="post">

        <article class="d-flex flex-column col-6">
            <h2 class="align-self-center">Написать отзыв</h2>
            <div class="form-group">
                <label>Рейтинг</label>
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
                <textarea class="form-control" placeholder="текст" required></textarea>
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

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias in, nam nostrum perspiciatis sapiente
                    unde!</p>
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

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias in, nam nostrum perspiciatis sapiente
                    unde!</p>
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

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias in, nam nostrum perspiciatis sapiente
                    unde!</p>
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

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias in, nam nostrum perspiciatis sapiente
                    unde!</p>
            </div>

        </article>
    </section>
@endsection
