<?php

namespace App\Http\Requests\Feedback;

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
            'content' => 'required|string',
            "user_id" => 'required|exists:users,id',
        ];
    }

    public function messages(): array
    {
        return [
            'feedback|required' => 'это поле необходимо для заполнение',
            'feedback|string' => 'это поле должно бить строкой',
            'user_id.required' => 'это поле необходимо для заполнение',
            'user_id.integer' => 'ID альбома должен бить числом',
            'user_id.exists' => 'ID альбома должен бить в базе данних',
        ];
    }
}
