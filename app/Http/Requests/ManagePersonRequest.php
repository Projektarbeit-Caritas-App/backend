<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManagePersonRequest extends FormRequest
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
            'age' => 'int|required',
            'limitation_sets' => 'array|nullable',
            'limitation_sets.*' => 'exists:limitation_sets,id|required'
        ];
    }

    public function bodyParameters()
    {
        return [
            'card_id' => [
                'description' => 'ID of the card the person is attached to',
                'example' => '50080528753334'
            ],
            'gender' => [
                'description' => 'Gender of the person',
                'example' => 'male'
            ],
            'age' => [
                'description' => 'Age of the Person',
                'example' => '20'
            ],
            'limitation_sets.*' => [
                'description' => 'IDs of the limitation_sets',
                'example' => '49394739894111'
            ]
        ];
    }
}
