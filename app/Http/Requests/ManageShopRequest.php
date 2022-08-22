<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageShopRequest extends FormRequest
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
            'street' => 'string|required',
            'postcode' => 'string|required',
            'city' => 'string|required',
            'contact' => 'string|required',
            'opening_hours.monday' => 'array|nullable',
            'opening_hours.monday.*.opens_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.monday.*.closes_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.monday.*.slots' => 'int|min:1|required',
            'opening_hours.tuesday' => 'array|nullable',
            'opening_hours.tuesday.*.opens_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.tuesday.*.closes_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.tuesday.*.slots' => 'int|min:1|required',
            'opening_hours.wednesday' => 'array|nullable',
            'opening_hours.wednesday.*.opens_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.wednesday.*.closes_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.wednesday.*.slots' => 'int|min:1|required',
            'opening_hours.thursday' => 'array|nullable',
            'opening_hours.thursday.*.opens_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.thursday.*.closes_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.thursday.*.slots' => 'int|min:1|required',
            'opening_hours.friday' => 'array|nullable',
            'opening_hours.friday.*.opens_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.friday.*.closes_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.friday.*.slots' => 'int|min:1|required',
            'opening_hours.saturday' => 'array|nullable',
            'opening_hours.saturday.*.opens_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.saturday.*.closes_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.saturday.*.slots' => 'int|min:1|required',
            'opening_hours.sunday' => 'array|nullable',
            'opening_hours.sunday.*.opens_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.sunday.*.closes_at' => ['string', 'regex:/^([0-1][0-9]|2[0-4]):[0-5][0-9]$/', 'required'],
            'opening_hours.sunday.*.slots' => 'int|min:1|required',
        ];
    }

    public function bodyParameters()
    {
        return [
            'organization_id' => [
                'description' => 'ID of the organization the shop is attached to',
                'example' => '50080528753334'
            ],
            'name' => [
                'description' => 'Name of the shop',
                'example' => 'The friendly shop around the corner'
            ],
            'street' => [
                'description' => 'Street where the shop is located',
                'example' => 'Around the corner'
            ],
            'postcode' => [
                'description' => 'Postcode where the shop is located',
                'example' => '50080'
            ],
            'city' => [
                'description' => 'City where the shop is located',
                'example' => 'Cornville'
            ],
            'contact' => [
                'description' => 'Contact information from the shop',
                'example' => 'You can call me under 1-603-413-4124'
            ],
            'opening_hours.monday.*.opens_at' => [
                'description' => 'Time of opening of the store on Monday',
                'example' => '07:30'
            ],
            'opening_hours.monday.*.closes_at' => [
                'description' => 'Time of closing of the store on Monday',
                'example' => '19:00'
            ],
            'opening_hours.monday.*.slots' => [
                'description' => 'Number of slots of the store for Monday',
                'example' => '4'
            ],
            'opening_hours.tuesday.*.opens_at' => [
                'description' => 'Time of opening of the store on Tuesday',
                'example' => '07:30'
            ],
            'opening_hours.tuesday.*.closes_at' => [
                'description' => 'Time of closing of the store on Tuesday',
                'example' => '19:00'
            ],
            'opening_hours.tuesday.*.slots' => [
                'description' => 'Number of slots of the store for Tuesday',
                'example' => '2'
            ],
            'opening_hours.wednesday.*.opens_at' => [
                'description' => 'Time of opening of the store on Wednesday',
                'example' => '07:30'
            ],
            'opening_hours.wednesday.*.closes_at' => [
                'description' => 'Time of closing of the store on Wednesday',
                'example' => '19:00'
            ],
            'opening_hours.wednesday.*.slots' => [
                'description' => 'Number of slots of the store for Wednesday',
                'example' => '6'
            ],
            'opening_hours.thursday.*.opens_at' => [
                'description' => 'Time of opening of the store on Thursday',
                'example' => '07:30'
            ],
            'opening_hours.thursday.*.closes_at' => [
                'description' => 'Time of closing of the store on Thursday',
                'example' => '19:00'
            ],
            'opening_hours.thursday.*.slots' => [
                'description' => 'Number of slots of the store for Thursday',
                'example' => '4'
            ],
            'opening_hours.friday.*.opens_at' => [
                'description' => 'Time of opening of the store on Friday',
                'example' => '07:30'
            ],
            'opening_hours.friday.*.closes_at' => [
                'description' => 'Time of closing of the store on Friday',
                'example' => '19:00'
            ],
            'opening_hours.friday.*.slots' => [
                'description' => 'Number of slots of the store for Friday',
                'example' => '4'
            ],
            'opening_hours.saturday.*.opens_at' => [
                'description' => 'Time of opening of the store on Saturday',
                'example' => '07:30'
            ],
            'opening_hours.saturday.*.closes_at' => [
                'description' => 'Time of closing of the store on Saturday',
                'example' => '19:00'
            ],
            'opening_hours.saturday.*.slots' => [
                'description' => 'Number of slots of the store for Saturday',
                'example' => '2'
            ],
            'opening_hours.sunday.*.opens_at' => [
                'description' => 'Time of opening of the store on Sunday',
                'example' => '07:30'
            ],
            'opening_hours.sunday.*.closes_at' => [
                'description' => 'Time of closing of the store on Sunday',
                'example' => '19:00'
            ],
            'opening_hours.sunday.*.slots' => [
                'description' => 'Number of slots of the store for Sunday',
                'example' => '2'
            ]
        ];
    }
}
