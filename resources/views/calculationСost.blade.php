@extends('main.wrapper')

@section('title')
    Расчет стоимости
@endsection

@section('content')

    <form class="d-flex justify-content-center align-content-center w-100" action="#" method="post">

        <article class="d-flex flex-column col-6">
            <h1 class="align-self-center">Расчет стоимости</h1>
            <section class="border border-primary rounded col-11">
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
                        <label for="length">Длина, м</label>
                        <input type="number" class="form-control" id="length">
                    </div>
                    <div class="form-group col-5">
                        <label for="width">Ширина, м</label>
                        <input type="number" class="form-control" id="width">
                    </div>
                    <div class="form-group col-5">
                        <label for="height">Высота, м</label>
                        <input type="number" class="form-control" id="height">
                    </div>
                </div>

                <div class="form-group">
                    <label for="weight">Вес, кг</label>
                    <input type="number" class="form-control" id="weight">
                </div>

                <div class="form-group">
                    <label for="amount">Примерная стоимость, руб</label>
                    <input type="number" class="form-control" id="amount">
                </div>

            </section>

            <section class="border border-primary rounded col-11 margin-top-20">
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
            </section>


            <div class="form-group col-11 margin-top-20">
                <p class="text-success price">Сумма: <span id="total">0</span></p>
            </div>

            <div class="btn-group align-self-center d-flex justify-content-around w-100">
                <a class="btn btn-primary col-3" id="calculateButton">Рассчитать</button>
                @if(Route::has('order'))
                    <a class="btn btn-primary col-3" href="{{ route('order') }}">Сделать заказ</a>
                @endif

            </a>

        </article>
    </form>

    <script>
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
