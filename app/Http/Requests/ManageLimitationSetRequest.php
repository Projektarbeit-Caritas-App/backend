<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageLimitationSetRequest extends FormRequest
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
            'name' => 'string|max:125|required',
            'valid_from' => 'date|required',
            'valid_until' => 'date|nullable'
        ];
    }

    public function bodyParameters()
    {
        return [
            'name' => [
                'description' => 'Name of the limitation set',
                'example' => 'A set to limit them all ~ Tolkien II'
            ],
            'valid_from' => [
                'description' => 'Date and time of the start of the validity of the limitation set.',
                'example' => '2022-08-04 12:00:00'
            ],
            'valid_until' => [
                'description' => 'Date and time of the expiry of the limitation set',
                'example' => '2022-08-04 12:00:00'
            ]
        ];
    }
}
