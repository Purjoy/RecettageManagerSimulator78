<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateCommentsRequest extends Request
{
    /**
     * Determine if the users is authorized to make this request.
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
            'commentaire' => 'required',
        ];
    }

    public function messages(){

        return [

            'commentaire.required' => 'commentaire manquant',




        ];

    }
}
