<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 1000);
            $table->string('matricula', 11);
            $table->string('cpf', 11);
            $table->string('telefone', 15);
            $table->string('email', 40);
            $table->string('cep', 8);
            $table->string('logradouro', 40);
            $table->string('complemento', 40);
            $table->string('bairro', 40);
            $table->string('uf', 2);
            $table->string('municipio', 15);

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
        Schema::dropIfExists('professores');
    }
}
