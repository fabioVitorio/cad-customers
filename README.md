# Cadastro de Clientes - Laravel

## Descrição

Este é um projeto de estudo desenvolvido com Laravel para o cadastro de clientes. Ele permite criar, visualizar, editar e excluir clientes utilizando um sistema CRUD.

## Tecnologias Utilizadas

- PHP 8+
- Laravel 10+
- MySQL
- Bootstrap (para interface, opcional)

## Requisitos

- PHP 8.0+
- Composer
- MySQL ou SQLite
- Node.js e NPM (opcional para gerenciamento de assets)

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/cadastro-clientes.git
   cd cadastro-clientes
   ```
2. Instale as dependências do Laravel:
   ```bash
   composer install
   ```
3. Copie o arquivo de configuração e configure o banco de dados no **.env**:
   ```bash
   cp .env.example .env
   ```
4. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```
5. Configure o banco de dados no arquivo **.env**:
   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=seu_banco
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha
   ```
6. Execute as migrações para criar as tabelas:
   ```bash
   php artisan migrate
   ```
7. Rode o servidor:
   ```bash
   php artisan serve
   ```

## Uso

Acesse `http://localhost:8000/customers` no navegador para visualizar a listagem de clientes.

## Rotas da API

Este projeto inclui um sistema de CRUD para clientes. Abaixo estão as rotas disponíveis:

### Listar Clientes

```
GET /customers
```

- Retorna uma lista paginada de clientes.

### Criar um Novo Cliente

```
POST /customers
```

- Parâmetros (JSON ou Form-Data):
  ```json
  {
    "name": "Nome do Cliente",
    "email": "email@example.com",
    "status": "ACTIVE"  // ou "ARCHIVED"
  }
  ```

### Buscar um Cliente Específico

```
GET /customers/{id}
```

- Retorna os dados de um cliente pelo ID.

### Atualizar Cliente

```
PUT /customers/{id}
```

- Parâmetros (JSON ou Form-Data):
  ```json
  {
    "name": "Novo Nome",
    "email": "novoemail@example.com",
    "status": "ARCHIVED"
  }
  ```

### Deletar Cliente

```
DELETE /customers/{id}
```

- Remove um cliente da base de dados.

## Melhorias Futuras

- Autenticação de usuários (Laravel Breeze ou Jetstream)
- Exportação de clientes para CSV/PDF
- Filtros e busca avançada

---

Desenvolvido para fins de aprendizado. 🚀

