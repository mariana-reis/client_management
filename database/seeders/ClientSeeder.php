<?php

namespace Database\Seeders;

use App\Models\Client;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 30; $i++) {
            $client = new Client();
            $client->nome_fantasia = $faker->company;
            $client->cnpj = $faker->unique()->numerify('##############');
            $client->endereco = $faker->address;
            $client->cidade = $faker->city;
            $client->estado = $faker->state;
            $client->pais = "Brasil";
            $client->telefone = $faker->phoneNumber;
            $client->email = $faker->unique()->safeEmail;
            $client->area_atuacao_cnae = $faker->words(3, true);
            $client->quadro_societario = $faker->name;

            $client->save();
        }
    }
}
