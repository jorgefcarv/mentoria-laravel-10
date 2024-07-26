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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // ->nullable(); para permitir que o campo aceite valores nulos
            $table->decimal('valor', 10,2); //o numero 10 e 2 é para colocar ponto nos numeros francionados e limitar
            $table->timestamps(); //create //update onde faz logs de criação e de atualizacao
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
