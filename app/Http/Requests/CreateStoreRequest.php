<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStoreRequest extends FormRequest
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
            "name" => "required|min:3",
            "address" => "required|min:10",
            "phone" => "required|min:7",
            "zipcode" => "required|min:5",
            // "place_id" => "required",
            "logo" => "nullable|image|mimes:jpeg,png,jpg,svg|max:1024",
            "banner" => "nullable|image|mimes:jpeg,png,jpg,svg|max:1024"
        ];
    }
}
