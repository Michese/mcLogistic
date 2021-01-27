<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminUsersRequest extends FormRequest
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
            'user_id' => [
                'required',
                'integer',
                Rule::notIn([1]),
            ],
            'name' => 'required|string',
            'phone' => 'required|integer|min:80000000000|max:89999999999',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($this->post('user_id')),
            ],
            'access_id' => [
                'required',
                'integer',
                Rule::notIn([5]),
            ],
        ];
    }
}
