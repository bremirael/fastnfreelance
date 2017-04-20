<?php

namespace App\Http\Requests;

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
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'passwordConfirm' => 'required|same:password',
        ];
    }
    public function messages() 
    {
          return [
            'email.required' => 'Adresse e-mail obligatoire',
            'email.email' => 'Adresse e-mail invalide',
            'email.max' => 'Adresse e-mail trop longue',
            'email.unique' => 'Adresse e-mail déjà utilisée',

            'password.required' => 'Mot de passe obligatoire',
            'password.min' => 'Mot de passe inférieur à 6 caractères',

            'passwordConfirm.required' => 'Confirmation de mot de passe obligatoire',
            'passwordConfirm.same' => 'Confirmation de mot de passe différente',
          ];
    }  
}
