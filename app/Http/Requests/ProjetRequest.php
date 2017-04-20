<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetRequest extends FormRequest
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
          'type_projet' => 'required',
          'titre' => 'required|max:255',
          'description' => 'required',
          'budget' => 'required',
        ];
    }

    public function messages() {
      return [
        'type_projet.required' => 'Type de projet obligatoire',     
        'titre.required' => 'Titre obligatoire',
        'titre.max' => 'Titre trop long',

        'description.required' => 'Description du projet obligatoire',
        'budget.required' => 'Budget du projet obligatoire',
      ];
    }
}
