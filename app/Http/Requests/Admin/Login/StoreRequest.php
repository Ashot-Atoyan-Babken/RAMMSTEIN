<?php

namespace App\Http\Requests\Admin\Login;

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
            'username' => 'required|string',
            'email' => 'required|string|email|unique:admins',
            'password' => 'required|string',
            'password_confirmation' => 'required_with:password|same:password',
        ];
    }

    public function messages()
    {
        return [
            'username|required'=>'это поле необходимо для заполнение',
            'username|string'=>'это поле должно бить строкой',
            'email|required'=>'это поле необходимо для заполнение',
            'email|string'=>'это поле должно бить строкой',
            'email|unique'=>'такая почта уже сушествует',
            'password|required'=>'это поле необходимо для заполнение',
            'password|string'=>'это поле должно бить строкой',


        ];
    }
}
