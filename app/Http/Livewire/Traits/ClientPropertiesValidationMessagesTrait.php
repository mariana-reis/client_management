<?php

namespace App\Http\Livewire\Traits;

trait ClientPropertiesValidationMessagesTrait
{
    protected array $messages = [
        'data.cnpj.required' => 'O campo CNPJ é obrigatório',
        'data.nome_fantasia.required' => 'O campo Nome é obrigatório',
        'data.endereco.required' => 'O campo Endereço é obrigatório',
        'data.cidade.required' => 'O campo Cidade é obrigatório',
        'data.estado.required' => 'O campo Estado é obrigatório',
        'data.pais.required' => 'O campo Pais é obrigatório',
        'data.telefone.required' => 'O campo Telefone é obrigatório',
        'data.email.required' => 'O campo E-mail é obrigatório',
        'data.area_atuacao_cnae.required' => 'O campo Area de Atuação é obrigatório',
        'data.quadro_societario.required' => 'O campo Quadro Societario é obrigatório',
    ];
}
