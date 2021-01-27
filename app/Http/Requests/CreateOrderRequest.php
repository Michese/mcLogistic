<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rule;

class CreateOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
//    public function authorize()
//    {
//        return false;
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type_cargo_id' => 'required|integer',
            'length' => 'required|numeric',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'amount' => 'required|numeric',
            'comment' => 'required|string',

            'payment_method_id' => 'required|integer',
            'sending_address' => 'required|string',
            'delivery_address' => 'required|string',
            'sending_date' => 'required|date',
            'sending_time' => 'required',
            'delivery_date' => 'required|date',
            'delivery_time' => 'required',
            'delivery_client_name' => 'nullable|string',
            'delivery_client_phone' => 'nullable|integer|min:80000000000|max:89999999999',
            'has_insurance' => [
                'nullable',
                'string',
                Rule::in(['on'])
            ],
            'has_filling_up' => [
                'nullable',
                'string',
                Rule::in(['on'])
            ],
            'has_supporting_documents' => [
                'nullable',
                'string',
                Rule::in(['on'])
            ],
            'has_return_documents' => [
                'nullable',
                'string',
                Rule::in(['on'])
            ],
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (!$this->checkValidationDates()) {
                $validator->errors()
                    ->add(
                        'delivery_date',
                        'Введена не корректная дата!'
                    );
            }
        });
    }

    protected function checkValidationDates() {
        $sendingDate = Date::make($this->post('sending_date') . ' ' . $this->post('sending_time'));
        $deliveryDate = Date::make($this->post('delivery_date') . ' ' . $this->post('delivery_time'));
        return ($sendingDate > Date::now()) && ($deliveryDate > Date::now()) && ($deliveryDate > $sendingDate);
    }

public function attributes()
{
    return [
      'type_cargo_id' => 'Тип груза',
        'payment_method_id' => 'Способ оплаты',
        'sending_address' => 'Адрес отправки',
        'delivery_address' => 'Адрес доставки',
        'sending_time' => 'Время отправки',
        'delivery_time' => 'Время доставки',
        'sending_date' => 'Дата отправки',
        'delivery_date' => 'Дата доставки',

    ];
}
}
