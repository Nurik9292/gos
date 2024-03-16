<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FooterRequest extends FormRequest
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
            'tm_content' => ['required', 'string', 'max:350'],
            'ru_content' => ['required', 'string', 'max:350'],
            'en_content' => ['required', 'string', 'max:350'],
        ];
    }

    public function messages(): array
    {
        return[
            'tm_content.required' => 'Заполните поле',
            'ru_content.required' => 'Заполните поле',
            'en_content.required' => 'Заполните поле',
            'tm_content.max' => 'Максимальное количество символов 350',
            'ru_content.max' => 'Максимальное количество символов 350',
            'en_content.max' => 'Максимальное количество символов 350',
        ];
    }
}
