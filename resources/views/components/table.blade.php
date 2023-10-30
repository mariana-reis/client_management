<div class="overflow-x-auto">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-extrabold text-gray-900">CNPJ</th>
                <th scope="col" class="px-6 py-4 font-extrabold text-gray-900">Nome Fantasia</th>
                <th scope="col" class="px-6 py-4 font-extrabold text-gray-900">Endereço</th>
                <th scope="col" class="px-6 py-4 font-extrabold text-gray-900">Cidade</th>
                <th scope="col" class="px-6 py-4 font-extrabold text-gray-900">Estado</th>
                <th scope="col" class="px-6 py-4 font-extrabold text-gray-900">Pais</th>
                <th scope="col" class="px-6 py-4 font-extrabold text-gray-900">Telefone</th>
                <th scope="col" class="px-6 py-4 font-extrabold text-gray-900">Email</th>
                <th scope="col" class="px-6 py-4 font-extrabold text-gray-900">Area Atuação</th>
                <th scope="col" class="px-6 py-4 font-extrabold text-gray-900">Quadro Societario</th>
                <th scope="col" class="px-6 py-4 font-extrabold text-gray-900 fixed-action-column">Ações</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            @foreach ($this->client as $client )
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $client->cnpj }}</td>
                    <td class="px-6 py-4">{{ $client->nome_fantasia }}</td>
                    <td class="px-6 py-4">{{ $client->endereco }}</td>
                    <td class="px-6 py-4">{{ $client->cidade }}</td>
                    <td class="px-6 py-4">{{ $client->estado }}</td>
                    <td class="px-6 py-4">{{ $client->pais }}</td>
                    <td class="px-6 py-4">{{ $client->telefone }}</td>
                    <td class="px-6 py-4">{{ $client->email }}</td>
                    <td class="px-6 py-4">{{ $client->area_atuacao_cnae }}</td>
                    <td class="px-6 py-4">{{ $client->quadro_societario }}</td>
                    <td class="px-6 py-4 fixed-action-column space-y-4">
                        <x-button wire:click="view({{ $client->id }})" xs icon="eye" secondary label="Visualizar" class="w-full" />
                        <x-button wire:click="edit({{ $client->id }})"  xs icon="pencil" primary label="Editar" class="w-full" />
                        <x-button wire:click="remove({{ $client->id }})" xs icon="x" negative label="Excluir" class="w-full" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="flex justify-end">
    {!! $this->client->links() !!}
</div>

@include('components.modal-view')

<style>
.fixed-action-column {
    position: sticky;
    right: 0;
    z-index: 1;
    background-color: rgb(255, 255, 255);
}
</style>
