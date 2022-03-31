<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->date('dateNaissance');
            $table->string('lieuNaissance');
            $table->string('civilite')->lenght(20);
            $table->integer('codePieceIdentite')->lenght(17);
            $table->integer('numeroPieceIdentite')->lenght(14);
            $table->string('genre')->lenght(10);
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
        Schema::drop('proprietaires');
    }
};
