<?php

namespace App\Services\Cnpj;
use Illuminate\Support\Facades\Http;

class CnpjService
{
    public static function handle(string $cnpj): array
    {
        $response = Http::get("https://brasilapi.com.br/api/cnpj/v1/${cnpj}")->json();

        if (empty($response) || isset($response['error'])) {
            return [];
        }

        $qsaArray = $response['qsa'] ?? [];
        $qsaString = '';

        foreach ($qsaArray as $item) {
            if (isset($item['qualificacao_socio']) && !empty($item['qualificacao_socio'])) {
                $qsaString = $item['qualificacao_socio'];
                break;
            }
        }

        return [
            'cnpj' => $response['cnpj'] ?? '',
            'nome_fantasia' => $response['nome_fantasia'] ?? '',
            'endereco' => $response['logradouro'] ?? '',
            'cidade' => $response['municipio'] ?? '',
            'estado' => $response['uf'] ?? '',
            'pais' => $response['pais'] ?? '',
            'telefone' => $response['ddd_telefone_1'] ?? '',
            'email' => $response['email'] ?? '',
            'area_atuacao_cnae' => $response['cnae_fiscal_descricao'] ?? '',
            'quadro_societario' => $qsaString,
        ];



    }
}
