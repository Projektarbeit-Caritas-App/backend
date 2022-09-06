<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageLimitationRequest extends FormRequest
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
            'product_type_id' => 'exists:product_types,id|required',
            'limitation_set_id' => 'exists:limitation_sets,id|required',
            'limit' => 'int|nullable'
        ];
    }

    public function bodyParameters()
    {
        return [
            'product_type_id' => [
                'description' => 'ID of the product type the limitation is attached to',
                'example' => '50080528753334'
            ],
            'limitation_set_id' => [
                'description' => 'ID of the limitation set the limitation is attached to',
                'example' => '50080528753334'
            ],
            'limit' => [
                'description' => 'Number that determines the limit',
                'example' => '3'
            ]
        ];
    }
}
