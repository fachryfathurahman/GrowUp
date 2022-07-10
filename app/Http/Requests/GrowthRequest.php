<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrowthRequest extends FormRequest
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
            'child_id'=>'required|integer',
            'height'=>'required|integer|max:3',
            'weight'=>'required|integer|max:3',
            'zScore'=>'required|alpha_num'
        ];
    }
}
