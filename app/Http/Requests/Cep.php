<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Cep extends FormRequest
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
            'cep' => 'required|min:9|max:9|unique:ceps',
            'logradouro' => 'max:500',
            'complemento' => 'max:500',
            'bairro' => 'max:500',
            'localidade' => 'max:500',
            'uf' => 'min:2|max:2|string',
            'ibge' => 'numeric',
        ];
    }
}
