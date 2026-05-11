<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->string('status');
            // Campo adicionado na Atividade 14.7
            $table->integer('prioridade')->default(1); 
            
            // Exclusão de projeto remove tarefas => cascade
            $table->foreignId('projeto_id')
                  ->constrained('projetos')
                  ->onDelete('cascade');
            
            // Exclusão de colaborador BLOQUEADA se tiver tarefas => restrict
            $table->foreignId('colaborador_id')
                  ->constrained('colaboradores')
                  ->onDelete('restrict');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
};
