<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        // dd($request);
        return [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username' => 'required|unique:users,username|max:255',
            // 'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/ |string|min:8|max:32',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'phone' => 'numeric|digits:14|required',
            
        ];
    }

}
