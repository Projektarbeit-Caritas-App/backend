<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'card_id' => 'exists:cards,id|required',
            'gender' => 'string|required',
            'age' => 'int|required'
        ];
    }

    public function bodyParameters()
    {
        return [
            'card_id' => [
                'description' => 'ID of the card the person is attached to'
            ],
            'gender' => [
                'description' => 'Gender of the person'
            ],
            'age' => [
                'description' => 'Age of the Person'
            ]
        ];
    }
}
