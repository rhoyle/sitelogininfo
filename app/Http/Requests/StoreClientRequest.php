<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'     => [
                'string',
                'required',
            ],
            'contact_number'    => [
                'string',
                'required',
            ],
            'cell_phone' => [
                'string',
                'required',
            ],
            'text_message'    => [
                'string',
                'required',
            ],
            'street_address' => [
                'string',
                'required',
            ],
            'street_address_line_2'    => [
                'string',
                'required',
            ],
            'city' => [
                'string',
                'required',
            ],
            'state'    => [
                'string',
                'required',
            ],
            'zip_code' => [
                'string',
                'required',
            ],
        ];
    }
}
