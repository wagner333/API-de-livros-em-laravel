<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // ID único para cada livro
            $table->string('title'); // Título do livro
            $table->string('author'); // Autor do livro
            $table->year('year'); // Ano de publicação
            $table->text('description')->nullable(); // Descrição do livro (opcional)
            $table->string('genre')->nullable(); // Gênero do livro (opcional)
            $table->string('isbn')->unique(); // Número de ISBN único
            $table->timestamps(); // Campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
