<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            // check current password matches
            'current_password' => ['required', 'current_password'],

            // new password rules
            'new_password' => [
                'required',
                'string',
                'min:8',
                'different:current_password',
                'confirmed', // this will check new_password_confirmation field
            ],
        ];
    }

    public function attributes(): array
    {
        return [
            'new_password' => 'new password',
            'current_password' => 'current password',
        ];
    }
}
