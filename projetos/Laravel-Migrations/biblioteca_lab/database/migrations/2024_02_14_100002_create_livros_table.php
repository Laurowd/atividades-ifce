<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->integer('ano_publicacao');
            
            // Chave estrangeira para autores
            $table->foreignId('autor_id')
                  ->constrained('autores')
                  ->onDelete('cascade'); // Regra de exclusão em cascata
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('livros');
    }
};
