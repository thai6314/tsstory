<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name'=> 'required|max:50',
            'last_name'=> 'required|max:50',
            'email'=> 'required',
            'password'=> 'required|max:50|min:6',
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required'=> 'Vui lòng nhập first name.',
            'first_name.max'=> 'First name tối đa 50 ký tự.',
            'last_name.required'=> 'Vui lòng nhập last name.',
            'last_name.max'=> 'Last name tối đa 50 ký tự',
            'email.regex'=> 'Email không hợp lệ.',
            'password.required'=> 'Vui lòng nhập password',
            'password.max'=> 'Password tối đa 50 ký tự.',
            'password.min'=> 'Password tối thiểu 6 ký tự.'
        ];
    }
}
