<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condutores', function (Blueprint $table) {
            $table->id();

            $table->string('nome')->require();
            $table->string('cpf')->unique()->require();
            $table->string('rg')->unique()->require();
            $table->string('mae')->require();
            $table->string('pai')->require();
            $table->string('numero_cnh')->unique()->require();
            $table->string('categoria_cnh')->require();
            $table->string('validade_cnh')->require();
            $table->string('primeira_cnh')->require();
            $table->string('uf_cnh')->require();
            $table->string('endereco')->require();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condutores');
    }
}
