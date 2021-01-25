@extends('main.wrapper')

@section('head')
    <!--    dadata      -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/css/suggestions.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/js/jquery.suggestions.min.js"></script>
@endsection

@section('title')
    Оформить заказ
@endsection

@section('content')
    <h1 class="align-self-center">Оформить заказ</h1>
    <form class="d-flex align-content-center flex-column" action="#" method="post">

        <div class="d-flex justify-content-sm-between form-group w-100 row row-cols-6">
            <article class="border border-primary col-5 rounded">
                <h2>Доставка</h2>

                <div class="form-group">
                    <label for="appt-date">Дата отправки:</label>
                    <input id="appt-date" type="date" class="form-control" name="date">
                </div>

                <div class="form-group">
                    <label for="appt-time">Время отправки: </label>
                    <input id="appt-time" type="time" class="form-control" name="time">
                </div>

                <div class="form-group">
                    <label for="address1">Адрес отправки</label>
                    <input type="text" class="form-control" id="address1">
                </div>

                <div class="form-group">
                    <label for="appt-date">Дата доставки:</label>
                    <input id="appt-date" type="date" class="form-control" name="date">
                </div>

                <div class="form-group">
                    <label for="appt-time">Время доставки: </label>
                    <input id="appt-time" type="time" class="form-control" name="time">
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
                        @foreach($paymentMethods as $paymentMethod)
                            <option value="{{ $paymentMethod->payment_method_id }}">{{ $paymentMethod->title }}</option>
                        @endforeach

                    </select>
                </div>
            </article>
            <article class="border border-primary col-5 rounded">
                <h2>Характеристики груза</h2>
                <div class="form-group">
                    <select class="custom-select custom-select-sm">
                        <option selected>Тип</option>
                        @foreach($typeCargos as $typeCargo)
                            <option value="{{ $typeCargo->type_cargo_id }}">{{ $typeCargo->title }}</option>
                        @endforeach
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

@endsection
