<?php

namespace App\Http\Livewire;

use App\Actions\ClientGetPropertiesAction;
use App\Actions\ClientStoreAction;
use App\Http\Livewire\Traits\ClientPropertiesRulesValidationTrait;
use App\Http\Livewire\Traits\ClientPropertiesValidationMessagesTrait;
use App\Models\Client;
use App\Services\Cnpj\CnpjService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class SearchCnpj extends Component
{
    use Actions;
    use ClientPropertiesValidationMessagesTrait;
    use ClientPropertiesRulesValidationTrait;
    use WithPagination;

    public array $data = [];
    public string $search = '';
    public bool $isEditing = false;
    public $totalClients;

    protected $queryString = ['search'];

    public function updated(string $key, string $value): void
    {
        if($key === 'data.cnpj') {
            $this->data = CnpjService::handle($value);
        }
    }

    public function save(): void
    {
        $this->validate();

        $existingClient = Client::where('cnpj', $this->data['cnpj'])
            ->orWhere('email', $this->data['email'])
            ->first();

        if ($existingClient) {
            $this->showNotification('Erro ao Salvar', 'Cliente já existe com o mesmo CNPJ ou e-mail.', 'error');
            return;
        }

        ClientStoreAction::save($this->data);

        if ($this->isEditing) {
            $this->showNotification('Edição de Cliente', 'Cliente atualizado com sucesso');
        } else {
            $this->showNotification('Criação de Cliente', 'Cliente criado com sucesso');
        }

        $this->resetExcept('clients');
    }

    public function edit(string $id): void
    {
        $this->data = ClientGetPropertiesAction::handle($id);
        $this->isEditing = true;
    }


    public function remove(string $id): void
    {
        Client::find($id)?->delete();

        $this->totalClients = $this->getTotalClients();

        $this->showNotification('Exclusão de Cliente', 'Cliente excluido com sucesso');
    }

    public function getTotalClients(): int
    {
        return Client::count();
    }

    public function searchClient(): void
    {
        if (!empty($this->data['cnpj'])) {
            $cnpj = $this->data['cnpj'];

            $clientDetails = CnpjService::handle($cnpj);

            if ($clientDetails) {
                $this->data = $clientDetails;
                $this->showNotification('Busca de Cliente', 'Detalhes do cliente encontrados com sucesso');
            } else {
                $this->showNotification('Busca de Cliente', 'Nenhum cliente encontrado com o CNPJ fornecido', 'error');
            }
        } else {
            $this->showNotification('Busca de Cliente', 'Informe um CNPJ válido', 'error');
        }
    }

    private function showNotification(string $title, string $message, string $type = 'success'): void
    {
        $this->notification()->{$type}($title, $message);
    }


    public function getClientProperty()
    {
        if($this->search) {
            return Client::where('estado', 'like', "%{$this->search}%")->paginate(5);
        }

        return Client::paginate(5);
    }

    public function mount(): void
    {
        $this->data = ClientGetPropertiesAction::getEmptyProperties();
        $this->totalClients = $this->getTotalClients();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.search-cnpj');
    }
}
