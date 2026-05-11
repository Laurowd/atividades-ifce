<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projeto_colaborador', function (Blueprint $table) {
            $table->id();
            
            // Exclusão de projeto remove vínculos => cascade
            $table->foreignId('projeto_id')
                  ->constrained('projetos')
                  ->onDelete('cascade');
            
            // Exclusão de colaborador remove apenas vínculos => cascade
            $table->foreignId('colaborador_id')
                  ->constrained('colaboradores')
                  ->onDelete('cascade');
                  
            $table->string('funcao');
            $table->date('data_entrada');
            $table->timestamps();
            
            // Restrição de unicidade
            $table->unique(['projeto_id', 'colaborador_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('projeto_colaborador');
    }
};
