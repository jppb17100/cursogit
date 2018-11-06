<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            //colunas da tabela
            $table->increments('id');
            $table->string('nome');
            $table->integer('estoque');
            $table->decimal('preco', 10, 2);
            $table->integer('categoria_id')->unsigned();

            //constrains
            $table->foreign('categoria_id')->references('id')->on('categorias')->onUpdate('cascade');

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
        Schema::dropIfExists('produtos');
    }
}
