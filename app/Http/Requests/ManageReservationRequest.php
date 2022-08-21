<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageReservationRequest extends FormRequest
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
            'shop_id' => 'exists:shops,id|required',
            'time' => 'date|required'
        ];
    }

    public function bodyParameters()
    {
        return [
            'card_id' => [
                'description' => 'ID of the card the reservation is attached to'
            ],
            'shop_id' => [
                'description' => 'ID of the shop the reservation is for'
            ],
            'time' => [
                'description' => 'Date and Time for the reservation',
                'example' => '2022-08-04 12:00:00'
            ]
        ];
    }
}
