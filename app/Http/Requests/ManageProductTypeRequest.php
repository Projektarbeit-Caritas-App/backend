<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageProductTypeRequest extends FormRequest
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
            'name' => 'string|required',
            'icon' => 'string'
        ];
    }

    public function bodyParameters()
    {
        return [
            'name' => [
                'description' => 'Name of the product type',
                'example' => 'T-Shirt'
            ],
            'icon' => [
                'description' => 'Icon of the product type',
                'example' => 'Icon value'
            ]
        ];
    }
}
