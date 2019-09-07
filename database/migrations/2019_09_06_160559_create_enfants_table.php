<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomenf');
            $table->string('postenf');
            $table->string('prenenf');
            $table->string('sexe');
            $table->integer('id_famille')->unsigned();
            $table->timestamps();

            $table->foreign('id_famille')
                ->references('id')
                ->on('familles')
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
        Schema::dropIfExists('enfants');
    }
}
