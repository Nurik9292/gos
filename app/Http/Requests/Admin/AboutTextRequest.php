<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutTextRequest extends FormRequest
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
            'ru_text' => ['required', 'string', 'max:800', 'min:100'],
            'tm_text' => ['required', 'string', 'max:800', 'min:100'],
            'en_text' => ['required', 'string', 'max:800', 'min:100']
        ];
    }

    public function messages(): array
    {
        return[
            'ru_text.required' => 'Заполните поле',
            'ru_text.max' => 'Максимальное количесвто символво 800',
            'ru_text.min' => 'Минимальное количесвто символво 800',
            'tm_text.required' => 'Заполните поле',
            'tm_text.max' => 'Максимальное количесвто символво 800',
            'tm_text.min' => 'Минимальное количесвто символво 800',
            'en_text.required' => 'Заполните поле',
            'en_text.max' => 'Максимальное количесвто символво 800',
            'en_text.min' => 'Минимальное количесвто символво 800',
        ];
    }
}
