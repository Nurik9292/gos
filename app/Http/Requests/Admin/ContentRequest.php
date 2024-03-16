<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            'image' => ['required', 'image', 'max:1024', 'mimes:jpeg,jpg,png'],
            'tm_content' => ['required', 'string', 'max:362'],
            'ru_content' => ['required', 'string', 'max:362'],
            'en_content' => ['required', 'string', 'max:362'],
            'tm_title' => ['required', 'string', 'max:25'],
            'en_title' => ['required', 'string', 'max:25'],
            'ru_title' => ['required', 'string', 'max:25'],

        ];
    }

    public function messages(): array
    {
        return[
            'image.required' => 'Выберите изображение',
            'image.image' => 'Выберите изображение',
            'image.mimes' => 'Выберите изображение в формате jpeg jpg png',
            'image.max' => 'Максимальный размер 1MB',
            'tm_content.required' => 'Заполните поле',
            'ru_content.required' => 'Заполните поле',
            'en_content.required' => 'Заполните поле',
            'tm_content.max' => 'Максимальное количество символов 362',
            'ru_content.max' => 'Максимальное количество символов 362',
            'en_content.max' => 'Максимальное количество символов 362',
            'ru_title.required' => 'Заполните поле',
            'en_title.required' => 'Заполните поле',
            'tm_title.required' => 'Заполните поле',
            'ru_title.max' => 'Максимальное количество символов 25',
            'en_title.max' => 'Максимальное количество символов 25',
            'tm_title.max' => 'Максимальное количество символов 25',
        ];
    }
}
