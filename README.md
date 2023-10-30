# Projeto de Gerenciamento de Clientes com Laravel e Livewire

Este é um projeto de gerenciamento de clientes utilizando o framework Laravel e a biblioteca Livewire. O projeto permite a inserção de detalhes de clientes por meio do CNPJ, com preenchimento automático dos dados, e também oferece a funcionalidade de edição e exclusão de registros.

## Pré-requisitos

Docker instalado em seu sistema. 

## Como Rodar o Projeto no Docker

1. **Clone este repositório em sua máquina local:**

   ```bash
   git clone https://github.com/mariana-reis/client_management.git

2. **Navegue até o diretório do projeto:**

   ```bash
    cd client_management

3. **Crie um arquivo .env a partir do arquivo .env.example:**

   ```bash
    cp .env.example .env
    
4. **Execute o seguinte comando para iniciar os contêineres Docker (Laravel e banco de dados):**

   ```bash
    docker-compose up -d

5. **Execute o seguinte comando para instalar as dependências PHP do Laravel:**

   ```bash
    docker-compose exec app composer install

6. **Execute as migrações do banco de dados para criar as tabelas necessárias:**

   ```bash
    docker-compose exec app php artisan migrate

5. **Inicie o serviço do Laravel:**

   ```bash
   docker-compose exec app php artisan serve --host=0.0.0.0 --port=8000
---
  - O projeto deve estar disponível em http://localhost:8000.

----
**Uso da API ReceitaWS**

Este projeto utiliza a API externa ReceitaWS para obter dados do CNPJ.

