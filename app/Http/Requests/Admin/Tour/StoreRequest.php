<?php

namespace App\Http\Requests\Admin\Tour;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'main_image' => 'required|file',
        ];
    }

    public function messages(): array
    {
        return [
            'title|required' => 'это поле необходимо для заполнение',
            'title|string' => 'это поле должно бить строкой',
            'main_image.required' => 'это поле необходимо для заполнение',
            'main_image.file' => 'необходимо вибрать файл',
        ];
    }
}
