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
            'lineItems' => 'array|min:1|required',
            'lineItems.*.person_id' => 'exists:people,id|required',
            'lineItems.*.product_type_id' => 'exists:product_types,id|required',
            'lineItems.*.amount' => 'int|min:1|required'
        ];
    }
}
