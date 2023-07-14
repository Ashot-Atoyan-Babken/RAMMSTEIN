<?php

namespace App\Http\Requests\Admin\User;

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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password'=>'required|string',
            'role'=>'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'name|required' => 'это поле необходимо для заполнение',
            'name|string' => 'это поле должно бить строкой',
            'email|required' => 'это поле необходимо для заполнение',
            'email|string' => 'это поле должно бить строкой',
            'email|unique' => 'такая почта уже сушествует',
            'email|email' => 'ваша почта должно соотвествовать user@some.somedomain формату',
            'password|required' => 'это поле необходимо для заполнение',
            'password|string' => 'это поле должно бить строкой',
            'role|required' => 'это поле необходимо для заполнение',
            'role|integer' => 'это поле должно бить числом',
        ];
    }
}
