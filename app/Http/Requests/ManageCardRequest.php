<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageCardRequest extends FormRequest
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
            'last_name' => 'string|max:125|required',
            'first_name' => 'string|max:125|required',
            'street' => 'string|max:125|nullable',
            'postcode' => 'string|max:125|nullable',
            'city' => 'string|max:125|nullable',
            'valid_from' => 'date|required',
            'valid_until' => 'date|required',
            'comment' => 'string|nullable'
        ];
    }

    public function bodyParameters()
    {
        return [
            'last_name' => [
                'description' => 'Last name of the cardholder',
                'example' => 'Kitsune'
            ],
            'first_name' => [
                'description' => 'First name of the cardholder',
                'example' => 'Yasu'
            ],
            'street' => [
                'description' => 'Street where the cardholder is located',
                'example' => 'Foxstreet 10'
            ],
            'postcode' => [
                'description' => 'Postcode where the cardholder is located',
                'example' => '12345'
            ],
            'city' => [
                'description' => 'City where the cardholder is located',
                'example' => 'Foxhole'
            ],
            'valid_from' => [
                'description' => 'Date and time of the start of validity of the card',
                'example' => '2022-08-04 12:00:00'
            ],
            'valid_until' => [
                'description' => 'Date and time of the expiry of the card',
                'example' => '2022-08-04 12:00:00'
            ],
            'comment' => [
                'description' => 'Additional Comment for the card',
                'example' => 'Took an additional buggy for his newly born child'
            ]
        ];
    }
}
