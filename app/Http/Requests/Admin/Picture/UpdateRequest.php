<?php

namespace App\Http\Requests\Admin\Picture;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'photos' => 'required|file',
            'concert_id' => 'required|integer|exists:concerts,id',
        ];
    }

    public function messages(): array
    {
        return [
            'photos.required' => 'это поле необходимо для заполнение',
            'photos.file' => 'необходимо вибрать файл',
            'concert_id.required' => 'это поле необходимо для заполнение',
            'concert_id.integer' => 'ID альбома должен бить числом',
            'concert_id.exists' => 'ID альбома должен бить в базе данних',
        ];
    }

}
