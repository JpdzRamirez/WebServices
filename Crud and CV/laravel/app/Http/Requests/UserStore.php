<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UserStore extends FormRequest
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
            'id'=>'required',
            'name'=>'required',
            'last_name'=>'required',
            'sex_gender'=>'required',
            'email'=>'required',
            'user'=>'required | max:20',
            'password'=>[
                'required',
		    Password::min(8)
			  ->mixedCase()
			  ->letters()
			  ->numbers()
			  ->symbols()
			  ->uncompromised(), // <-- must contain a special character
            ],
            'confirmPassword'=>'required  |same:password',
        ];
    }
}
