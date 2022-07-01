<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestGrowth extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'child_id'=> ['required','unique'],
            'first_month_weight' =>['integer','max:2'],
            'sixth_month_weight'=>['integer','max:2'],
            'twelfth_month_weight'=>['integer','max:2'],
            'eighteenth_month_weight'=>['integer','max:2'],
            'twentyfourth_month_weight'=>['integer','max:2'],
            'thirtieth_weight'=>['integer','max:2'],
            'thirtysixth_month_weight'=>['integer','max:2'],
            'fortysecond_month_weight'=>['integer','max:2'],
            'fortyeighth_month_weight'=>['integer','max:2'],
            'fiftyfourth_month_weight'=>['integer','max:2'],
            'sixtieth_month_weight'=>['integer','max:2'],

            'first_month_length'=>['integer','max:2'],
            'sixth_month_length'=>['integer','max:2'],
            'twelfth_month_length'=>['integer','max:2'],
            'eighteenth_month_length'=>['integer','max:2'],
            'twentyfourth_month_length'=>['integer','max:2'],
            'thirtieth_length'=>['integer','max:2'],
            'thirtysixth_month_length'=>['integer','max:2'],
            'fortysecond_month_length'=>['integer','max:2'],
            'fortyeighth_month_length'=>['integer','max:2'],
            'fiftyfourth_month_length'=>['integer','max:2'],
            'sixtieth_month_length'=>['integer','max:2'],
        ];
    }
}

