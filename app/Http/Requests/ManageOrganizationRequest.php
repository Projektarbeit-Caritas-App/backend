<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageOrganizationRequest extends FormRequest
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
            'street' => 'string|required',
            'postcode' => 'string|required',
            'city' => 'string|required',
            'contact' => 'string|required'
        ];
    }

    public function bodyParameters() {
        return [
            'name' => [
                'description' => 'Name of the organization'
            ],
            'street' => [
                'description' => 'Street where the organization is located'
            ],
            'postcode' => [
                'description' => 'Postcode where the organization is located'
            ],
            'city' => [
                'description' => 'City where the organization is located'
            ],
            'contact' => [
                'description' => 'Contact information from the organization'
            ],
        ];
    }
}
