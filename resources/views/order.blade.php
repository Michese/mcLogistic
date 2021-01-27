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

    @if ($errors->any())
        <div class="alert alert-danger margin-top-20">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="d-flex align-content-center flex-column" action="{{ route('order.create') }}" method="post">
        @csrf
        <div class="d-flex justify-content-sm-between form-group w-100 row row-cols-6">
            <article class="border border-primary col-5 rounded">
                <h2>Доставка</h2>

                <div class="form-group">
                    <label for="sending_date">Дата отправки:</label>
                    <input id="sending_date" type="date" class="form-control" name="sending_date">
                </div>

                <div class="form-group">
                    <label for="sending_time">Время отправки: </label>
                    <input id="sending_time" type="time" class="form-control" name="sending_time">
                </div>

                <div class="form-group">
                    <label for="sending_address">Адрес отправки</label>
                    <input type="text" class="form-control" id="sending_address" name="sending_address">
                </div>

                <div class="form-group">
                    <label for="delivery_date">Дата доставки:</label>
                    <input id="delivery_date" type="date" class="form-control" name="delivery_date">
                </div>

                <div class="form-group">
                    <label for="delivery_time">Время доставки: </label>
                    <input id="delivery_time" type="time" class="form-control" name="delivery_time">
                </div>

                <div class="form-group">
                    <label for="delivery_address">Адрес получения</label>
                    <input type="text" class="form-control" id="delivery_address" name="delivery_address">
                </div>

                <div class="delivery_client_name">
                    <label for="delivery_client_name">ФИО получателя</label>
                    <input type="text" class="form-control" id="delivery_client_name" name="delivery_client_name">
                </div>

                <div class="form-group">
                    <label for="delivery_client_phone">Телефон получателя</label>
                    <input type="tel" class="form-control" name="delivery_client_phone" id="delivery_client_phone">
                </div>

                <div class="form-group">
                    <select class="custom-select custom-select" name="payment_method_id">
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
                    <select class="custom-select custom-select-sm" name="type_cargo_id">
                        <option selected>Тип</option>
                        @foreach($typeCargos as $typeCargo)
                            <option value="{{ $typeCargo->type_cargo_id }}">{{ $typeCargo->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    <div class="form-group col-5">
                        <label for="length">Длина, м</label>
                        <input type="number" class="form-control" id="length" name="length" required>
                    </div>

                    <div class="form-group col-5">
                        <label for="width">Ширина, м</label>
                        <input type="number" class="form-control" id="width" name="width" required>
                    </div>

                    <div class="form-group col-5">
                        <label for="height">Высота, м</label>
                        <input type="number" class="form-control" id="height" name="height" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="weight">Вес, кг</label>
                    <input type="number" class="form-control" id="weight" name="weight" required>
                </div>

                <div class="form-group">
                    <label for="amount">Примерная стоимость, руб</label>
                    <input type="number" class="form-control" id="amount" name="amount" required>
                </div>

                <div class="mb-3">
                    <label for="comment">Комментарии по доставке</label>
                    <textarea class="form-control" id="comment" name="comment" placeholder="" required></textarea>
                </div>

            </article>

            <article class="border border-primary col-5 rounded margin-top-20">
                <h2>Дополнительные услуги</h2>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="has_insurance" name="has_insurance">
                    <label class="custom-control-label" for="has_insurance">Добавить страховку</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="has_filling_up" name="has_filling_up">
                    <label class="custom-control-label" for="has_filling_up">Опломбировать (+ 30p)</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="has_supporting_documents" name="has_supporting_documents">
                    <label class="custom-control-label" for="has_supporting_documents">Организация перевозки
                        сопроводительных документов (+ 100p)</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="has_return_documents" name="has_return_documents">
                    <label class="custom-control-label" for="has_return_documents">Возврат документов (+ 200p)</label>
                </div>
            </article>
        </div>

        <div class="form-group col-5">
            <a class="btn btn-primary align-self-center" id="calculateButton">Рассчитать</a>
            <p class="margin-top-20 price text-success">Сумма: <span id="total">0</span></p>
        </div>

        <button type="submit" class="btn btn-primary align-self-center">Подтвердить</button>

    </form>

    <script>

        $("#delivery_address").suggestions({
            token: "d6097cd2b54bebb53f5dc6707398488706079aec",
            type: "ADDRESS",
            onSelect: function (suggestion) {
                console.log(suggestion);
            }
        });

        $("#sending_address").suggestions({
            token: "d6097cd2b54bebb53f5dc6707398488706079aec",
            type: "ADDRESS",
            onSelect: function (suggestion) {
                console.log(suggestion);
            }
        });

        $("#delivery_client_name").suggestions({
            token: "d6097cd2b54bebb53f5dc6707398488706079aec",
            type: "NAME",
            onSelect: function (suggestion) {
                console.log(suggestion);
            }
        });

        const calculateButton = document.querySelector('#calculateButton')
        calculateButton.addEventListener('click', () => {

            const length = document.querySelector('#length').value;
            const width = document.querySelector('#width').value;
            const height = document.querySelector('#height').value;
            const weight = document.querySelector('#weight').value;
            const amount = document.querySelector('#amount').value;
            const has_insurance = document.querySelector('#has_insurance').value;
            const has_filling_up = document.querySelector('#has_filling_up').value;
            const has_supporting_documents = document.querySelector('#has_supporting_documents').value;
            const has_return_documents = document.querySelector('#has_return_documents').value;

            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('calculation.cost.calculate') }}",
                data: {
                    'length':length,
                    'width':width,
                    'height':height,
                    'weight':weight,
                    'amount':amount,
                    'has_insurance':has_insurance,
                    'has_filling_up':has_filling_up,
                    'has_supporting_documents':has_supporting_documents,
                    'has_return_documents':has_return_documents
                },
                dataType: "json",
                success: function(response){
                    const total = document.querySelector('#total')
                    total.textContent = response;
                }
            });
        })

    </script>

@endsection
