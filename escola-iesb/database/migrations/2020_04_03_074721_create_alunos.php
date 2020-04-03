<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('email', 40);
            $table->string('logradouro', 40);
            $table->string('complemento', 40);
            $table->string('bairro', 40);
            $table->string('uf', 2);
            $table->string('municipio', 15);
            $table->date('nascimento');
            $table->string('telefone', 15);
            $table->string('cep', 8);



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
        Schema::dropIfExists('alunos');
    }
}
