<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            
            // Exclusão de curso não deve apagar alunos (Restrict é o default, ou Set Null)
            // Assumindo 'restrict' para impedir deletar curso com alunos
            $table->foreignId('curso_id')
                  ->constrained('cursos')
                  ->onDelete('restrict'); 
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alunos');
    }
};
