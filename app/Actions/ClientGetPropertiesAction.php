<?php

namespace App\Actions;
use App\Models\Client;

class ClientGetPropertiesAction
{
    public static function handle(string|int $id): array
    {
        $client = Client::find($id)->toArray();

        return [
            'cnpj' => $client['cnpj'],
            'nome_fantasia' => $client['nome_fantasia'],
            'endereco' => $client['endereco'],
            'cidade' => $client['cidade'],
            'estado' => $client['estado'],
            'pais' => $client['pais'],
            'telefone' => $client['telefone'],
            'email' => $client['email'],
            'area_atuacao_cnae' => $client['area_atuacao_cnae'],
            'quadro_societario' => $client['quadro_societario'],
        ];
    }

    public static function getEmptyProperties(): array
    {
        return [
            'cnpj' => '',
            'nome_fantasia' => '',
            'endereco' => '',
            'cidade' => '',
            'estado' => '',
            'pais' => '',
            'telefone' => '',
            'email' => '',
            'area_atuacao_cnae' => '',
            'quadro_societario' => '',
        ];
    }
}
