# Rotas da API de Livros

### 1. Listar todos os livros
- **Método**: `GET`
- **Rota**: `api/books`

### 2. Exibir detalhes de um livro
- **Método**: `GET`
- **Rota**: `api/books/{id}`

### 3. Criar um novo livro
- **Método**: `POST`
- **Rota**: `api/books`

### 4. Atualizar um livro
- **Método**: `PUT`
- **Rota**: `api/books/{id}`

### 5. Deletar um livro
- **Método**: `DELETE`
- **Rota**: `api/books/{id}`

#### Exemplo de Resposta:
```json
[
  {
    "id": 1,
    "title": "O Senhor dos Anéis",
    "author": "J.R.R. Tolkien",
    "year": 1954,
    "description": null,
    "genre": null,
    "isbn": "978-0261103573",
    "created_at": "2025-01-06T18:07:32.000000Z",
    "updated_at": "2025-01-06T18:07:32.000000Z"
  }
]
