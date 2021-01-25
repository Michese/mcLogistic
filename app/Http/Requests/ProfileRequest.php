<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
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
            'name' => 'required|string',
            'phone' => 'required|integer|min:80000000000|max:89999999999',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore(\Auth::id()),
            ],
            'password' => 'nullable|string|min:8'
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
            if (!$this->checkUserPassword()) {
                $validator->errors()
                    ->add(
                        'password',
                        'Вы ввели неверный пароль!'
                    );
            }
        });
    }

    protected function checkUserPassword() {
        return \Hash::check(
            $this->post('currentPassword'),
            \Auth::user()->password
        );
    }


}
