<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cep extends Model
{
    protected $fillable = [
        'cep',
        'logradouro',
        'complemento',
        'bairro',
        'localidade',
        'uf',
        'unidade',
        'ibge',
        'gia',
    ];

    public function setCepAttribute($value)
    {
        $this->attributes['cep'] = $this->clearField($value);
    }

    private function clearField(?string $param)
    {
        if(empty($param)) {
            return '';
        }

        return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    }
}
