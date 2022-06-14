<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('aits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('cod_ait')->unique()->require();
            $table->string('orgao_autuador')->require();

            $table->string('placa')->nullable()->require();
            $table->string('marca')->nullable()->require();
            $table->string('modelo')->nullable()->require();
            $table->string('cor')->nullable()->require();
            $table->string('chassi')->nullable();
            $table->string('pais')->nullable()->require();
            $table->string('especie')->nullable()->require();
            $table->string('nome_condutor')->nullable();
            $table->string('cpf_condutor')->nullable();
            $table->string('rg_condutor')->nullable();
            $table->string('cnh_condutor')->nullable();
            $table->string('uf_cnh')->nullable();
            $table->string('categoria_cnh')->nullable();
            $table->string('validade_cnh')->nullable();
            $table->string('logradouro')->nullable()->require();
            $table->string('numero')->nullable()->require();
            $table->string('bairro')->nullable()->require();
            $table->string('cidade')->nullable()->require();
            $table->string('data')->nullable()->require();
            $table->string('hora')->nullable()->require();
            $table->string('uf_mg')->nullable()->require();
            $table->string('codigo_infracao')->nullable()->require();
            $table->string('descricao')->nullable();
            $table->string('equipamento_afericao')->nullable();
            $table->string('medicao_realizada')->nullable();
            $table->string('limite_regulamentado')->nullable();
            $table->string('valor_considerado')->nullable();
            $table->string('observacoes')->nullable();
            $table->string('medida1')->nullable();
            $table->string('medida2')->nullable();
            $table->string('ficha_vistoria')->nullable();
            $table->string('imagem')->nullable();
            $table->string('matricula')->require();
            $table->string('nome')->require();

            $table->boolean('status')->nullable();

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
        Schema::dropIfExists('aits');
    }
}
