<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWsl_infoRequest extends FormRequest
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
            'site_name'     => [
                'string',
                'required',
            ],
            'user_name'     => [
                'string',
                'required',
            ],
            'users_email'    => [
                'string',
                'required',
            ],
            'url'     => [
                'string',
                'required',
            ],
            'password' => [
                'string',
                'required',
            ],
            'contact_person'     => [
                'string',
            ],
            'account_number'     => [
                'string',
            ],
            'miscellaneous'     => [
                'string',
            ],
            'site_pin'     => [
                'string',
            ],
            'security_question_1'     => [
                'string',
            ],
            'security_answer_1'     => [
                'string',
            ],
            'security_question_2'     => [
                'string',
            ],
            'security_answer_2'     => [
                'string',
            ],
            'security_question_3'     => [
                'string',
            ],
            'security_answer_3'     => [
                'string',
            ],
        ];
    }
}
