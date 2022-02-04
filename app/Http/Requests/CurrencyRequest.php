<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurrencyRequest extends FormRequest
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
            'name' => 'required | string | max: 100',
            'shortName' => 'required | string | max: 10',
            'value' => 'numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'Pole musi być tekstem',
            'name.required' => 'Pole name jest wymagane',
            'name.max' => 'Pole name może mieć max 100 znaków',
            'shortName.required' => 'Pole z krótką nazwą jest wymagane',
            'shortName.string' => 'Pole z krótką nazwą musi być stringiem',
            'shortName.max' => 'Pole z krótką nazwą może mieć max 10 znaków',
            'value.numeric' => 'Pole wartości musi być liczbą zmiennoprzecinkową'
        ];
    }
}
