<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FooterContentRequest extends FormRequest
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
            'tel' => ['nullable', 'string', 'max:300'],
            'email' => ['nullable', 'string', 'max:300'],
            'address_tm' => ['nullable', 'string', 'max:300'],
            'address_ru' => ['nullable', 'string', 'max:300'],
            'address_en' => ['nullable', 'string', 'max:300'],
            'work_tm' => ['nullable', 'string', 'max:300'],
            'work_ru' => ['nullable', 'string', 'max:300'],
            'work_en' => ['nullable', 'string', 'max:300'],
        ];
    }

    public function messages(): array
    {
        return[
            'address_tm.max' => 'Максимальное количество символов 300',
            'address_ru.max' => 'Максимальное количество символов 300',
            'address_en.max' => 'Максимальное количество символов 300',
            'work_tm.max' => 'Максимальное количество символов 300',
            'work_ru.max' => 'Максимальное количество символов 300',
            'work_en.max' => 'Максимальное количество символов 300',
        ];
    }
}
