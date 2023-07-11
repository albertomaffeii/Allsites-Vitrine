<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'      => 'required',
            'email'     => 'required|email',
            'message'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'The name field is required.',
            'email.required'   => 'The name field is required.',
            'email.email'      => 'Please enter an email in valid format',
            'message.required' => 'The message field is required.',
        ];
    }
}
