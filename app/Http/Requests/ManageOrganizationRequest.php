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
            'name' => 'string|max:125|required',
            'street' => 'string|max:125|required',
            'postcode' => 'string|max:125|required',
            'city' => 'string|max:125|required',
            'contact' => 'string|required'
        ];
    }

    public function bodyParameters() {
        return [
            'name' => [
                'description' => 'Name of the organization',
                'example' => 'Caritas'
            ],
            'street' => [
                'description' => 'Street where the organization is located',
                'example' => 'Franziskanergasse 3'
            ],
            'postcode' => [
                'description' => 'Postcode where the organization is located',
                'example' => ' 97070'
            ],
            'city' => [
                'description' => 'City where the organization is located',
                'example' => 'Wuerzburg'
            ],
            'contact' => [
                'description' => 'Contact information from the organization',
                'example' => 'You can call me under 1-603-413-4124'
            ],
        ];
    }
}
