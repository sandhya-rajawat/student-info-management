<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email', 
             'password' => [
            'nullable',          // null allowed (matlab optional)
            'string',
            'min:8',
            'confirmed',         // password_confirmation match kare
            'regex:/[A-Z]/',     // kam se kam 1 uppercase
            'regex:/[a-z]/',     // kam se kam 1 lowercase
            'regex:/[0-9]/',     // kam se kam 1 number
            'regex:/[@$!%*#?&]/' // kam se kam 1 special character
        ],

        ];
    }

     public function messages()
    {
        return
            [
                'image.image' => 'Uploaded file must be an  jpg, jpeg, png, or webp .',
                'image.mimes' => 'Image must be in jpg, jpeg, png, or webp format.',
                'image.max' => 'Image size must not exceed 2MB.'
            ];
}
}
