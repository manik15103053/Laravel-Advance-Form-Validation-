<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:18',
            'email' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Name is Required',
            'name.max' => 'The Name has not more then 20 charter',
            'email.required' => 'The Email is Required'
        ];
    }
}
