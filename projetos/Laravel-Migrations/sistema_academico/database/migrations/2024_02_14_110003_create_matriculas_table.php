<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            
            // Exclusão de aluno deve apagar suas matrículas (Cascade)
            $table->foreignId('aluno_id')
                  ->constrained('alunos')
                  ->onDelete('cascade');
            
            $table->date('data_matricula');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
};
