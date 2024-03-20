<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
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
            'image' => ['nullable', 'image', 'max:1024', 'mimes:jpeg,jpg,png'],
            'tm_content' => ['required', 'string', 'max:250'],
            'ru_content' => ['required', 'string', 'max:250'],
            'en_content' => ['required', 'string', 'max:250'],
        ];
    }

    public function messages(): array
    {
        return[
            'image.image' => 'Выберите изображение',
            'image.mimes' => 'Выберите изображение в формате jpeg jpg png',
            'image.max' => 'Максимальный размер 1MB',
            'ru_content.required' => 'Заполните поле',
            'ru_content.max' => 'Максимальное количество символов 250',
            'en_content.required' => 'Заполните поле',
            'en_content.max' => 'Максимальное количество символов 250',
            'tm_content.required' => 'Заполните поле',
            'tm_content.max' => 'Максимальное количество символов 250',
        ];
    }
}
