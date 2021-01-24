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

            </section>

            <section class="border border-primary rounded col-11 margin-top-20">
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
            </section>


            <div class="form-group col-11 margin-top-20">
                <p class="text-success price">Сумма: <span id="total">0</span></p>
            </div>

            <button type="submit" class="btn btn-primary align-self-center">Подтвердить</button>
        </article>
    </form>
@endsection
