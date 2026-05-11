<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // integer
            $table->string('nome'); // string
            $table->decimal('preco', 8, 2); // decimal
            $table->integer('quantidade'); // integer
            $table->boolean('ativo'); // boolean
            
            // Atividade 4 & 5 & 6: Chave estrangeira com foreignId constrained e delete cascade
            $table->foreignId('categoria_id')
                  ->constrained('categorias')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
