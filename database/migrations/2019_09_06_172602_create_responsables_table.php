<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomresp');
            $table->string('postresp');
            $table->string('prenresp');
            $table->integer('nombresp');
            $table->integer('id_famille')->unsigned();
            $table->integer('id_adresse')->unsigned();
            $table->timestamps();

            $table->foreign('id_famille')
                ->references('id')
                ->on('familles')
                ->onDelete('cascade');

            $table->foreign('id_adresse')
                ->references('id')
                ->on('adresses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsables');
    }
}
