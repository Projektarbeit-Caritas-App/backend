<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ManageUserUpdateRequest extends FormRequest
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
            'organization_id' => 'exists:organizations,id|required',
            'name' => 'string|required',
            'email' => 'email:rfc,dns|required',
            'password' => ['string', 'confirmed', 'nullable', Password::defaults()],
            'role' => 'string|in:inactive,external_employee,external_manager,employee,organization_manager,instance_manager|required'
        ];
    }

    public function bodyParameters()
    {
        return [
            'organization_id' => [
                'description' => 'ID of the organization the user is attached to'
            ],
            'name' => [
                'description' => 'Name of the user'
            ],
            'email' => [
                'description' => 'Email of the user'
            ],
            'password' => [
                'description' => 'Password of the user'
            ],
            'roles' => [
                'description' => 'Role the user gets assigned'
            ]
        ];
    }
}
