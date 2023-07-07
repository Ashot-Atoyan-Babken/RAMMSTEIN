<?php

namespace App\Http\Requests\Admin\Song;

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
            'title' => 'required|string',
            'song_name' => 'required|file',
            'album_id' => 'required|integer|exists:albums,id',
        ];
    }

    public function messages(): array
    {
        return [
            'title|required' => 'это поле необходимо для заполнение',
            'title|string' => 'это поле должно бить строкой',
            'song_name.required' => 'это поле необходимо для заполнение',
            'song_name.file' => 'необходимо вибрать файл',
            'album_id.required' => 'это поле необходимо для заполнение',
            'album_id.integer' => 'ID альбома должен бить числом',
            'album_id.exists' => 'ID альбома должен бить в базе данних',
        ];
    }

}
