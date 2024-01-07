<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRegRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'phone' => 'numeric|digits:14|required',
            'national_number' => 'required',
            'address' => 'required',
            'city' => "required|in:Amman,Ajloun,Aqaba,Balqa,Irbid,Jerash,Karak,Ma'an,Madaba,Mafraq,Tafilah,Zarqa",
            'category_id' => 'required|notIn:Category_id',
            'commercial_register' => 'required|file|mimes:pdf|max:2048',
        ];
    }
}
