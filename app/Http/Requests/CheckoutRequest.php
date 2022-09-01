<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'comment' => 'string|nullable',
            'lineItems' => 'array|min:1|required',
            'lineItems.*.person_id' => 'exists:people,id|required',
            'lineItems.*.product_type_id' => 'exists:product_types,id|required',
            'lineItems.*.amount' => 'int|min:1|required'
        ];
    }

    public function bodyParameters()
    {
        return [
            'comment' => [
                'description' => 'Additional Comment for the card',
                'example' => 'Took an additional buggy for his newly born child'
            ],
            'lineItems.*.person_id' => [
                'description' => 'ID of the person the lineItem is for',
                'example' => '50080528753334'
            ],
            'lineItems.*.product_type_id' => [
                'description' => 'ID of the product_type of the lineItem',
                'example' => '50080528753334'
            ],
            'lineItems.*.amount' => [
                'description' => 'The amount of purchased lineItems of the same product_type',
                'example' => '5'
            ]
        ];
    }
}
