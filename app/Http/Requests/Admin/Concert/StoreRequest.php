<?php

namespace App\Http\Requests\Admin\Concert;

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
            'tour_photo' => 'required|file',
            'tour_id' => 'required|exists:tours,id',
        ];
    }

    public function messages(): array
    {
        return [
            'title|required' => 'это поле необходимо для заполнение',
            'title|string' => 'это поле должно бить строкой',
            'tour_photo.required' => 'это поле необходимо для заполнение',
            'tour_photo.file' => 'необходимо вибрать файл',
            'tour_id.required' => 'это поле необходимо для заполнение',
            'tour_id.integer' => 'ID альбома должен бить числом',
            'tour_id.exists' => 'ID альбома должен бить в базе данних',
        ];
    }
}
