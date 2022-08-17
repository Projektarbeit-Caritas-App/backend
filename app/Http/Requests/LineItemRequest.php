<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LineItemRequest extends FormRequest
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
            'visit_id' => 'exists:visits,id|required',
            'person_id' => 'exists:people,id|required',
            'product_type_id' => 'exists:product_types,id|required',
        ];
    }

    public function bodyParameters()
    {
        return [
            'visit_id' => [
                'description' => 'ID of the visit the lineItem is attached to'
            ],
            'person_id' => [
                'description' => 'ID of the person the lineItem is attached to'
            ],
            'product_type_id' => [
                'description' => 'ID of the product_type the lineItem is attached to'
            ]
        ];
    }
}
