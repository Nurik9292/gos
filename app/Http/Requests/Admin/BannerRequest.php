<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'image' => ['nullable', 'image', 'max:2048', 'mimes:jpeg,jpg,png'],
            'tm_title' => ['nullable', 'string', 'max:70'],
            'ru_title' => ['nullable', 'string', 'max:70'],
            'en_title' => ['nullable', 'string', 'max:70'],
            'tm_content' => ['nullable', 'string', 'max:600'],
            'ru_content' => ['nullable', 'string', 'max:600'],
            'en_content' => ['nullable', 'string', 'max:600'],
        ];
    }

    public function messages(): array
    {
        return[
            'image.required' => 'Выберите изображение',
            'image.image' => 'Выберите изображение',
            'image.mimes' => 'Выберите изображение в формате jpeg jpg png',
            'image.max' => 'Максимальный размер 1MB',
            'tm_content.max' => 'Превышено максимальное количество символов 600',
            'ru_content.max' => 'Превышено максимальное количество символов 600',
            'en_content.max' => 'Превышено максимальное количество символов 600',
            'tm_title.max' => 'Превышено максимальное количество символов 70',
            'ru_title.max' => 'Превышено максимальное количество символов 70',
            'en_title.max' => 'Превышено максимальное количество символов 70',
        ];
    }
}
