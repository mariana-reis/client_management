@if ($showClientModal)
    <div class="fixed inset-0 z-50 overflow-x-hidden overflow-y-auto outline-none focus:outline-none flex items-center justify-center">
        <div class="w-40 md:max-w-2xl mx-auto relative">
            <div class="bg-white rounded-lg shadow-lg p-4">
                <div class="flex justify-between items-center border-b-2 border-gray-300 p-4">
                    <h3 class="text-xl font-semibold">
                        Detalhes do Cliente:
                    </h3>
                    <button class="p-2 ml-2 rounded-full hover:bg-gray-200" wire:click="closeClientModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M5.293 4.293a1 1 0 011.414 0L8 6.586l1.293-1.293a1 1 0 111.414 1.414L9.414 8l1.293 1.293a1 1 0 01-1.414 1.414L8 9.414l-1.293 1.293a1 1 0 01-1.414-1.414L6.586 8 5.293 6.707a1 1 0 010-1.414z"/>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <div class="mb-4">
                        <p class="mb-1"><strong>CNPJ:</strong> {{ $selectedClient->cnpj }}</p>
                        <p class="mb-1"><strong>Nome Fantasia:</strong> {{ $selectedClient->nome_fantasia }}</p>
                        <p class="mb-1"><strong>Endereço:</strong> {{ $selectedClient->endereco }}</p>
                        <p class="mb-1"><strong>Cidade:</strong> {{ $selectedClient->cidade }}</p>
                        <p class="mb-1"><strong>Estado:</strong> {{ $selectedClient->estado }}</p>
                        <p class="mb-1"><strong>País:</strong> {{ $selectedClient->pais }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="mb-1"><strong>Telefone:</strong> {{ $selectedClient->telefone }}</p>
                        <p class="mb-1"><strong>Email:</strong> {{ $selectedClient->email }}</p>
                        <p class="mb-1"><strong>Área de Atuação:</strong> {{ $selectedClient->area_atuacao_cnae }}</p>
                        <p class="mb-1"><strong>Quadro Societário:</strong> {{ $selectedClient->quadro_societario }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 z-40 bg-black opacity-25"></div>
@endif
