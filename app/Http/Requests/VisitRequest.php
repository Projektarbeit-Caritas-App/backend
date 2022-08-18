<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitRequest extends FormRequest
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
            'user_id' => 'exists:users,id|required'
        ];
    }

    public function bodyParameters()
    {
        return [
            'card_id' => [
                'description' => 'ID of the card the visit is attached to'
            ],
            'user_id' => [
                'description' => 'ID of the user the visit is attached to'
            ]
        ];
    }
}
