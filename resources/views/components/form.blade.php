<div class="lg:col-span-2">
    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
        <x-notifications />
        <div class="md:col-span-3">
            <x-input wire:model.lazy="data.cnpj" label="CNPJ" placeholder="Informe o CNPJ" />
        </div>
        <div class="md:col-span-2 m-5">
            <x-button wire:click="searchClient" spinner="searchClient" primary md icon="search" label="Buscar CNPJ" />
        </div>
        <div class="md:col-span-3">
            <x-input wire:model="data.nome_fantasia" label="Nome Fantasia" placeholder="Informe o Nome Fantasia" />
        </div>
        <div class="md:col-span-2">
            <x-input wire:model.lazy="data.email" label="E-mail" placeholder="Informe o E-mail" />
        </div>
        <div class="md:col-span-3">
            <x-input wire:model.lazy="data.area_atuacao_cnae" label="Área de Atuação(CNAE)" placeholder="Informe a Área de Atuação(CNAE)" />
        </div>
        <div class="md:col-span-2">
            <x-input wire:model.lazy="data.quadro_societario" label="Quadro Societario" placeholder="Informe o Quadro Societario" />
        </div>
        <div class="md:col-span-3">
            <x-input wire:model.lazy="data.endereco" label="Endereço" placeholder="Informe o Endereço" />
        </div>
        <div class="md:col-span-2">
            <x-input wire:model.lazy="data.telefone" label="Telefone" placeholder="Informe o Telefone" />
        </div>
        <div class="md:col-span-2">
            <x-input wire:model.lazy="data.cidade" label="Cidade" placeholder="Informe a Cidade" />
        </div>
        <div class="md:col-span-2">
            <x-input wire:model.lazy="data.estado" label="Estado" placeholder="Informe o Estado" />
        </div>
        <div class="md:col-span-1">
            <x-input wire:model.lazy="data.pais" label="Pais" placeholder="Informe o Pais" />
        </div>
        <div class="md:col-span-5 text-right inline-flex items-end py-4">
            <x-button wire:click="save" spinner="save" positive label="Salvar Cliente" />
        </div>
    </div>
</div>
