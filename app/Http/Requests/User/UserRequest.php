<?php

namespace App\Http\Requests\User;
//use App\Rules\CurrentPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UserRequest extends FormRequest
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
            'username' => 'alpha_dash|max:255',
            'first_name' => 'alpha_dash|max:255',
            'last_name' => 'alpha_dash|max:255',
            'email' => [
                'email',
                'max:255',
                Rule::unique('users')->ignore(auth()->user()->id),
            ],
            'password' => 'string|min:6|',
            'address'   =>   'required|string|max:255',
            'zip_code'   =>   'required|alpha_dash|max:5',
            'city'   =>   'required|alpha_dash|max:255',
            'country'   =>   'required|alpha_dash|max:255',
            'phone'   =>   'required|alpha_dash|max:10',
            'role'   =>   'required',
        ];
    }
}
