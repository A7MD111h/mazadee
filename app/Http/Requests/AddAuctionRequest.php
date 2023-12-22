<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAuctionRequest extends FormRequest
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
            "category"=> "required",
            "name"=> "required",
            "quality"=> "required|in:High,Medium,Low",
            "budjet" => "required|numeric|min:0.01",
            'city' => "required|in:Amman,Ajloun,Aqaba,Balqa,Irbid,Jerash,Karak,Ma'an,Madaba,Mafraq,Tafilah,Zarqa",
            "quantity"=> "required|numeric|integer|min:1",
            "description"=> "required",
        ];
    }
}
