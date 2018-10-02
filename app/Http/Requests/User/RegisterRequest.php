<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'civilite' => 'required',
            'first_name' => 'required|alpha_dash|max:255',
            'last_name' => 'required|alpha_dash|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'address'   =>   'required|string|max:255',
            'zip_code'   =>   'required|alpha_dash|max:5',
            'city'   =>   'required|alpha_dash|max:255',
            'country'   =>   'required|alpha_dash|max:255',
            'phone'   =>   'required|alpha_dash|max:10',
            'role'   =>   'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'civilite.required' => 'A Gender is required',
            'first_name.required'  => 'A Fisrt Name is required',
            'last_name.required'  => 'A Last Name is required',
            'email.required'  => 'A Email is required',
            'password.required'  => 'A Password is required',
            'address.required'  => 'A Address is required',
            'zip_code.required'  => 'A Zip Code is required',
            'city.required'  => 'A City is required',
            'country.required'  => 'A Country is required',
            'phone.required'  => 'A Phone is required',
            'role.required'  => 'A User Type is required',
        ];
    }
}
