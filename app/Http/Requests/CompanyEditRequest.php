<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyEditRequest extends FormRequest
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
            'name' => 'required|max:255',
            'username' => 'required|unique:users,username|max:255',
            'email' => ['required','email:rfc,dns|unique:users,email',Rule::unique('users')->ignore(auth()->user()->id)],
            'phone' => 'numeric|digits:14|required',
            'national_number' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => "required|in:Amman,Ajloun,Aqaba,Balqa,Irbid,Jerash,Karak,Ma'an,Madaba,Mafraq,Tafilah,Zarqa",
        ];
    }
}
