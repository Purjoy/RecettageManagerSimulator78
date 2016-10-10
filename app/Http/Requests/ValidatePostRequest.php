<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidatePostRequest extends Request
{

    public function authorize()
    {
        return true;
    }


    /**
     * On impose des règles à l'utilisateur (required imposer à l'utilisateur d'écrire
     * et required|min:x impose d'écrire au minimum x caractères
     */

    public function rules()
    {
        return [

            'title'   => 'required|min:10',
            'description' => 'required|min:10'

        ];}

    /**
     *On détermine le message envoyé sur l'utilisateur ne respècte pes les règles plus haut
     */


    public function messages(){

        return [


            'title.required' => 'Titre obligatoire',
            'title.min' => 'Titre > 10 caractères',
            'description.required' => 'Description obligatoire',
            'Description.min' => 'Description > 10 caractères'
        ];

    }
}
