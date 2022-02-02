<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoFormulario extends FormRequest
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
            'nome' => [
                'required',
                'min:3',
                'max:60',
            ],
            'email' => ['required', 'email:rfc,dns'],
            'cpf' =>   [
                        'required', 
                        'min:11',
                        'max:11'
                    ],
            'endereco' => 'required', 'max:100'
            
            
        ];
    }
}
