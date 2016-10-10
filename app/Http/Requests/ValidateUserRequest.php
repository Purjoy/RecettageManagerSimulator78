<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateUserRequest extends Request
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

            'email'   => 'required|min:1'

        ];}

    /**
     *On détermine le message envoyé sur l'utilisateur ne respècte pes les règles plus haut
     */


    public function messages(){

        return [


            'email.required' => 'Titre obligatoire',
            'email.min' => 'Titre > 2 caractères'
        ];

    }
}