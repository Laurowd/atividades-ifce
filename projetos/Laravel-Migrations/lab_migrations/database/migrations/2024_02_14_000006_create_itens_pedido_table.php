<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('itens_pedido', function (Blueprint $table) {
            $table->id();
            
            // Relacionamento com Pedidos
            $table->foreignId('pedido_id')
                  ->constrained('pedidos')
                  ->onDelete('cascade');
                  
            // Relacionamento com Produtos (assumindo que existe da atividade anterior)
            $table->foreignId('produto_id')
                  ->constrained('produtos')
                  ->onDelete('cascade');

            $table->integer('quantidade');
            $table->decimal('preco_unitario', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('itens_pedido');
    }
};
