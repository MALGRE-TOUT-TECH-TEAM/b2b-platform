<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => "required|max:50",
            'surname' => "required|max:50",
            'email' => "required|unique|email",
            'password' => "required|min:8|max:50",
            'birthdate' => "required|date|before:today",
            'gender' => "required",
            'photo' => "",
            'telephone' => "",
        ];
    }
}
