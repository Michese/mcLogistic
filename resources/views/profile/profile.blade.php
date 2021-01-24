@extends('main.wrapper')

@section('title')
    Профиль
@endsection

@section('content')

    <form class="d-flex justify-content-center align-content-center" action="#" method="post">

        <article class="d-flex flex-column col-6">
            <h1 class="align-self-center">Личный кабинет</h1>

            <div class="form-group">
                <label for="exampleInputEmail1">ФИО*</label>
                <input type="text" class="form-control" id="fullname" value="Олег">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email*</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       value="example@example.com">
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
    <script>

        $("#fullname").suggestions({
            token: "d6097cd2b54bebb53f5dc6707398488706079aec",
            type: "NAME",
            onSelect: function (suggestion) {
                console.log(suggestion);
            }
        });
    </script>

@endsection
