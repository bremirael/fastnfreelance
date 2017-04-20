<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditSocieteRequest extends FormRequest
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
            
            'raison_sociale',
            'secteur_activite',
            'nombre_employes' => 'numeric',
            'inf_complementaire',

            'ville',
            'adresse',
            'code_post' => 'numeric',
            'photo',
            'tel' => 'max:20',
        ];
    }

    public function messages() 
    {
          return [
            'tel.max' => 'Numéro de téléphone trop long',
            'nombre_employes.numeric' => 'Nombre employés non valide',
            'code_post.numeric' => 'Code postal non valide',
          ];
    }
}
