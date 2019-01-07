<?php

namespace App\Http\Requests;

use App\Rules\StrongPassword;
use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password_now' => 'required|string|min:8|max:25|current_password',
            'usu_password' => ['required', 'string', 'min:8', 'max:25', 'different:password_now', 'confirmed', new StrongPassword],
        ];
    }
}
