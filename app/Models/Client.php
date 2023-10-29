<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nome_fantasia',
        'cnpj',
        'endereco',
        'cidade',
        'estado',
        'pais',
        'telefone',
        'email',
        'area_atuacao_cnae',
        'quadro_societario',
    ];
}
