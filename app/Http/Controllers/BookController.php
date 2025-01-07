<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Exibir todos os livros
    public function index()
    {
        $books = Book::all(); // Recupera todos os livros
        return response()->json($books);
    }

    // Exibir um livro específico
    public function show($id)
    {
        $book = Book::findOrFail($id); // Busca o livro pelo ID
        return response()->json($book);
    }

    // Criar um novo livro
    public function store(Request $request)
    {
        // Validando os dados recebidos
        $validated = $request->validate(Book::rules());

        $book = Book::create($validated); // Cria o novo livro com os dados validados
        return response()->json($book, 201); // Retorna o livro criado com status 201
    }

    // Atualizar um livro existente
    public function update(Request $request, $id)
    {
        // Encontrar o livro pelo ID
        $book = Book::findOrFail($id);

        // Validando os dados recebidos
        $validated = $request->validate(Book::rules());

        // Atualizando os dados do livro
        $book->update($validated);
        return response()->json($book);
    }

    // Deletar um livro
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete(); // Deleta o livro encontrado
        return response()->json(null, 204); // Retorna uma resposta vazia com status 204
    }
}
