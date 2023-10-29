<div>
@include('components.nav')
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="text-gray-600">
                      <p class="font-medium text-lg">Carregamento Automático de Dados do Cliente com Inserção do CNPJ</p>
                      <p class="text-justify">
                        Assim que você inserir o número de CNPJ no campo de entrada, os detalhes do cliente serão automaticamente carregados e preenchidos, permitindo que você os revise e, se desejar, prossiga com o processo de cadastro.
                      </p>
                      <p class="py-5 text-justify">
                        Abaixo, você encontrará uma tabela com os dados cadastrados, juntamente com opções para editar e excluir registros. Ao clicar no botão de edição, os dados são automaticamente preenchidos no formulário, facilitando a atualização das informações.
                      </p>
                        <div class="mt-4 text-justify">
                            <x-badge wire:model="totalClients" lg icon="clipboard-list" cyan label="Total de Clientes Cadastrados: {{ $totalClients }}" />
                        </div>
                    </div>
                    @include('components.form')
                </div>
            </div>
        </div>
    </div>
    <div class="w-full md:w-full px-3 mb-6 py-3">
        <x-input wire:model="search" placeholder="Buscar..." />
    </div>
    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5 w-auto">
        @include('components.table')
    </div>
</div>
