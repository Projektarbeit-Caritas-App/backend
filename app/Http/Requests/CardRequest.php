<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'last_name' => 'string|required',
            'first_name' => 'string|required',
            'street' => 'string',
            'postcode' => 'string',
            'city' => 'string',
            'valid_from' => 'date|required',
            'valid_until' => 'date|required',
            'creator_id' => 'exists:users,id|required'
        ];
    }

    public function bodyParameters() {
        return [
            'last_name' => [
                'description' => 'Last name of the cardholder'
            ],
            'first_name' => [
                'description' => 'First name of the cardholder'
            ],
            'street' => [
                'description' => 'Street where the cardholder is located'
            ],
            'postcode' => [
                'description' => 'Postcode where the cardholder is located'
            ],
            'city' => [
                'description' => 'City where the cardholder is located'
            ],
            'valid_from' => [
                'description' => 'Date and time of the start of validity of the card',
                'example' => '2022-08-04 12:00:00'
            ],
            'valid_until' => [
                'description' => 'Date and time of the expiry of the card',
                'example' => '2022-08-04 12:00:00'
            ],
            'creator_id' => [
                'description' => 'ID of the User the card is attached to'
            ]
        ];
    }
}
