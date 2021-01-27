@extends('main.wrapper')

@section('title')
    Отзывы
@endsection

@section('head')
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
@endsection

@section('content')
    <h1>Отзывы</h1>
    @guest
                <a href="{{ route('auth.login') }}" class="text-dark">Авторизуйтесь, чтобы написать отзыв</a>
    @else
        <form class="d-flex justify-content-center align-content-center margin-bottom-20 margin-top-20"
              action="{{ route('feedback') }}"
              method="post">
            @csrf
            <article class="d-flex flex-column col-6">
                <h2 class="align-self-center">Написать отзыв</h2>
                <div class="form-group">
                    <label>Рейтинг</label>

                    <div class="star-rating" id="rating">
                        <span class="far fa-star star" data-rating="1"></span>
                        <span class="far fa-star star" data-rating="2"></span>
                        <span class="far fa-star star" data-rating="3"></span>
                        <span class="far fa-star star" data-rating="4"></span>
                        <span class="far fa-star star" data-rating="5"></span>
                        <input type="hidden" name="rating" class="rating-value" value="3">
                    </div>
                </div>

                <div class="form-group">
                    <label for="dignities">Достоинства</label>
                    <textarea class="form-control" placeholder="текст" name="dignities" id="dignities"
                              required></textarea>
                </div>

                <div class="form-group">
                    <label for="disadvantages">Недостатки</label>
                    <textarea class="form-control" placeholder="текст" name="disadvantages" id="disadvantages"
                              required></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="comment">Отзыв</label>
                    <textarea class="form-control" placeholder="текст" id="comment" name="comment" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary align-self-end">Отправить</button>
            </article>
        </form>

        <script>
            const rating = document.querySelector('#rating')
            const stars = rating.querySelectorAll('.star')
            stars.forEach(star => {
                star.addEventListener('click', () => {
                    console.log('hello')
                })
            })
        </script>

    @endguest
    <h2 class="text-xl-center">Все отзывы</h2>
    <section class="row">

        @foreach($feedback as $item)
            <article class="card bg-dark text-light border rounded-sm col-12">
                <div class="card-body">
                    <div class="card-header">
                        <h3>{{ $item->user->name }}</h3>
                        <p>
                            @for($count=0; $count<5;$count++)
                                @if($count < $item->rating)
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                        </p>
                        <p>{{ $item->created_at }}</p>
                    </div>
                    <h4>ДОСТОИНСТВА:</h4>
                    <p>{{ $item->dignities }}</p>
                    <h4>НЕДОСТАТКИ:</h4>
                    <p>{{ $item->disadvantages }}</p>
                    <p>{{ $item->comment }}</p>
                </div>

            </article>
        @endforeach
        <div class="w-100 d-flex justify-content-center">
            {{ $feedback->onEachSide(5)->links() }}
        </div>

    </section>



@endsection
