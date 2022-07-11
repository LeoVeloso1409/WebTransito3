<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();

            $table->string('placa')->unique()->require();
            $table->string('marca')->require();
            $table->string('modelo')->require();
            $table->string('cor')->require();
            $table->string('chassi')->unique()->require();
            $table->string('pais')->require();
            $table->string('especie')->require();
            $table->string('categoria')->require();
            $table->string('proprietario')->require();
            $table->string('cpf')->require();
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
        Schema::dropIfExists('veiculos');
    }
}
