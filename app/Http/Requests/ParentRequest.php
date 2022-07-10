<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParentRequest extends FormRequest
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
            'name'=>'requred|max:30',
            'age'=>'required|numeric|min:1|max:3',
            'phone'=>'required|numeric|min:10|max:13',
            'email'=>'required|max:50'
        ];
    }
}
