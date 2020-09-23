<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ceps', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cep', 9)->unique();
            $table->string('logradouro', 500)->nullable();
            $table->string('complemento', 500)->nullable();
            $table->string('bairro', 500)->nullable();
            $table->string('localidade', 500)->nullable();
            $table->char('uf', 2)->nullable();
            $table->bigInteger('unidade')->nullable();
            $table->integer('ibge')->nullable();
            $table->string('gia', 500)->nullable();
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
        Schema::dropIfExists('ceps');
    }
}
