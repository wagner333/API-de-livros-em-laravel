<?php

// app/Models/Book.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Definir a tabela associada ao modelo
    protected $table = 'books';

    // Definir os campos que podem ser preenchidos
    protected $fillable = [
        'title',
        'author',
        'year',
        'description',
        'genre',
        'isbn',
    ];

    // Definir os campos que não podem ser preenchidos
    protected $guarded = [];

    // Definir os campos de data (para que o Laravel trate os campos como timestamps)
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Validar os dados, se necessário
    public static function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer',
            'isbn' => 'required|string|unique:books,isbn',
        ];
    }
}
