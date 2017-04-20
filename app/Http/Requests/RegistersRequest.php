<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistersRequest extends FormRequest
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
            'raison_sociale' => 'required|max:255',
            'secteur_activite' => 'required',
            'nombre_employes' => 'required',
            'inf_complementaire' => 'required|max:255',
            'ville' => 'max:255',
            'adresse' => 'max:255',
            'code_post' => 'max:11',
            'photo' => 'max:255',
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

            'raison_sociale.required' => 'Précision de la Raison sociale obligatoire',
            'raison_sociale.max' => 'Raison Sociale trop longue',

            'secteur_activite.required' => 'Précision du secteur d\'activité obligatoire',

            'nombre_employes.required' => 'Précision du nombre employés obligatoire',
            

            'inf_complementaire.required' => 'Précision d\'infos complémentaires obligatoire',
            'inf_complementaire.max' => 'Information complémentaire trop longue',

            'ville.max' => 'Ville trop longue',

            'adresse.max' => 'Adresse trop longue',

            'code_post.max' => 'Code postal trop long',

            'photo.max' => 'Chemin pour la photo trop long',

            'tel.max' => 'Numéro de téléphone trop long',

          ];
    }
}
