<?php

namespace App\Actions;
use App\Models\Client;

class ClientStoreAction
{
    public static function save(array $data): void
    {
        Client::updateOrCreate(
            [
                'cnpj' => $data['cnpj'],
            ],
            [
                'nome_fantasia' => $data['nome_fantasia'],
                'endereco' => $data['endereco'],
                'cidade' => $data['cidade'],
                'estado' => $data['estado'],
                'pais' => $data['pais'],
                'telefone' => $data['telefone'],
                'email' => $data['email'],
                'area_atuacao_cnae' => $data['area_atuacao_cnae'],
                'quadro_societario' => $data['quadro_societario'],
            ]
        );
    }
}
