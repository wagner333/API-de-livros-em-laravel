Documentação da API de Livros

Esta documentação descreve a API RESTful que permite gerenciar livros em um sistema. A API está construída utilizando o Laravel e disponibiliza os seguintes endpoints:
Endpoints
1. Listar todos os livros

    Método: GET
    Rota: /books
    Descrição: Retorna uma lista de todos os livros registrados.
    Resposta:

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

2. Exibir detalhes de um livro

    Método: GET
    Rota: /books/{id}
    Descrição: Retorna os detalhes de um livro específico baseado no ID.
    Parâmetros:
        id (int): O ID do livro.
    Resposta:

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

3. Criar um novo livro

    Método: POST
    Rota: /books
    Descrição: Cria um novo livro no sistema.
    Corpo da Requisição:

{
  "title": "O Senhor dos Anéis",
  "author": "J.R.R. Tolkien",
  "year": 1954,
  "isbn": "978-0261103573",
  "description": null,
  "genre": null
}

Resposta:

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

4. Atualizar informações de um livro

    Método: PUT
    Rota: /books/{id}
    Descrição: Atualiza as informações de um livro existente.
    Parâmetros:
        id (int): O ID do livro a ser atualizado.
    Corpo da Requisição:

{
  "title": "O Senhor dos Anéis - Edição Revisada",
  "author": "J.R.R. Tolkien",
  "year": 1954,
  "isbn": "978-0261103573",
  "description": "Uma edição revisada da obra clássica.",
  "genre": "Fantasia"
}

Resposta:

    {
      "id": 1,
      "title": "O Senhor dos Anéis - Edição Revisada",
      "author": "J.R.R. Tolkien",
      "year": 1954,
      "description": "Uma edição revisada da obra clássica.",
      "genre": "Fantasia",
      "isbn": "978-0261103573",
      "created_at": "2025-01-06T18:07:32.000000Z",
      "updated_at": "2025-01-06T18:10:00.000000Z"
    }

5. Deletar um livro

    Método: DELETE
    Rota: /books/{id}
    Descrição: Exclui um livro do sistema.
    Parâmetros:
        id (int): O ID do livro a ser excluído.
    Resposta:

    {
      "message": "Livro deletado com sucesso"
    }

Formato dos Dados do Livro

Cada livro contém os seguintes campos:

    id: (int) Identificador único do livro.
    title: (string) Título do livro.
    author: (string) Autor do livro.
    year: (int) Ano de publicação do livro.
    description: (string|null) Descrição do livro (opcional).
    genre: (string|null) Gênero do livro (opcional).
    isbn: (string) Número ISBN do livro.
    created_at: (datetime) Data e hora de criação do livro.
    updated_at: (datetime) Data e hora da última atualização do livro.

Exemplos de Respostas

Resposta para um livro cadastrado:

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

