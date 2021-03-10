<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfissionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissional', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('nome');
            $table->string('password');
            $table->string('disponibilidade');
            $table->string('titulo');
            $table->string('skills');
            $table->integer('taxa');
            $table->string('portfolio');
            $table->string('linkedin');
            $table->string('github');
            $table->string('imagem');
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
        Schema::dropIfExists('profissional');
    }
}
