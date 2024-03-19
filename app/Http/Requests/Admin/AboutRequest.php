<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'tm_content' => ['nullable', 'string', 'max:800'],
            'ru_content' => ['nullable', 'string', 'max:800'],
            'en_content' => ['nullable', 'string', 'max:800'],
            'tm_title' => ['nullable', 'string', 'max:80'],
            'ru_title' => ['nullable', 'string', 'max:80'],
            'en_title' => ['nullable', 'string', 'max:80'],
        ];
    }

    public function messages(): array
    {
        return[
            'ru_content.required' => 'Заполните поле',
            'ru_content.max' => 'Максимальное количесвто символво 800',
            'tm_content.required' => 'Заполните поле',
            'tm_content.max' => 'Максимальное количесвто символво 800',
            'en_content.required' => 'Заполните поле',
            'en_content.max' => 'Максимальное количесвто символво 800',
            'image.required' => 'Выберите изображение',
            'image.image' => 'Выберите изображение',
            'image.mimes' => 'Выберите изображение в формате jpeg jpg png',
            'image.max' => 'Максимальный размер 1MB',
            'tm_title.max' => 'Превышено максимальное количество символов 80',
            'ru_title.max' => 'Превышено максимальное количество символов 80',
            'en_title.max' => 'Превышено максимальное количество символов 80',
            'tm_title.required' => 'Заполните поле',
            'ru_title.required' => 'Заполните поле',
            'en_title.required' => 'Заполните поле',
        ];
    }
}
