<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ManageUserStoreRequest extends FormRequest
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
            'name' => 'string|max:125|required',
            'email' => 'email:rfc,dns|max:125|required',
            'password' => ['string', 'confirmed', 'required', Password::defaults()],
            'role' => 'string|in:inactive,external_employee,external_manager,employee,organization_manager,instance_manager|required'
        ];
    }

    public function bodyParameters()
    {
        return [
            'organization_id' => [
                'description' => 'ID of the organization the user is attached to',
                'example' => '50080528753334'
            ],
            'name' => [
                'description' => 'Name of the user',
                'example' => 'xX_B4d-gUY_08_Xx'
            ],
            'email' => [
                'description' => 'Email of the user',
                'example' => 'B4d-gUY@web.de'
            ],
            'password' => [
                'description' => 'Password of the user',
                'example' => 'MyP4zzW0rD'
            ],
            'roles' => [
                'description' => 'Role the user gets assigned'
            ]
        ];
    }
}
