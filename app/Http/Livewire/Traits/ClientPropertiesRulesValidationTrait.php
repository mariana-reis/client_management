<?php

namespace App\Http\Livewire\Traits;

trait ClientPropertiesRulesValidationTrait
{
    protected array $rules = [
        'data.cnpj' => ['required'],
        'data.nome_fantasia' => ['required'],
        'data.endereco' => ['required'],
        'data.cidade' => ['required'],
        'data.estado' => ['required','max:2'],
        'data.pais' => ['required'],
        'data.telefone' => ['required'],
        'data.email' => ['required'],
        'data.area_atuacao_cnae' => ['required'],
        'data.quadro_societario' => ['required'],
    ];
}
