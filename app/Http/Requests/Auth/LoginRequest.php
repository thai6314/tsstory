<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email'=> 'regex:/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/',
            'password'=> 'required|max:50|min:6',
        ];
    }
    public function messages(): array
    {
        return [
            'email.regex'=> 'Email không hợp lệ.',
            'password.required'=> 'Không được để trống',
            'password.max'=> 'Tối đa 50 ký tự.',
            'password.min'=> 'Tối thiểu 6 ký tự.'
        ];
    }
}
