<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterfRequest extends FormRequest
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
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'profession' => 'required|max:255',
            'competence' => 'required',
            'date_naissance' => 'required',
            'bio' => 'required|max:255',

            'ville',
            'adresse',
            'code_post',
            'photo',
            'tel' => 'max:20',
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

            'nom.required' => 'Nom obligatoire',
            'nom.max' => 'Nom trop long',

            'prenom.required' => 'Prénom obligatoire',
            'prenom.max' => 'Prénom trop long',

            'profession.required' => 'Profession obligatoire',
            'profession.max' => 'Profession trop longue',

            'competence.required' => 'Compétence obligatoire',
            'date_naissance.required' => 'Date de naissance obligatoire',

            'bio.required' => 'Bio obligatoire',
            'bio.max' => 'Bio trop longue',

            'ville.max' => 'Ville trop longue',

            'adresse.max' => 'Adresse trop longue',

            'code_post.max' => 'Code postal trop long',

            'photo.max' => 'Chemin pour la photo trop long',

            'tel.max' => 'Numéro de téléphone trop long',
          ];
    }
}
