<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('objdemand');
            $table->integer('id_enfant')->unsigned();
            $table->integer('id_respons')->unsigned();
            $table->timestamps();

            $table->foreign('id_enfant')
                ->references('id')
                ->on('enfants')
                ->onDelete('cascade');

            $table->foreign('id_respons')
                ->references('id')
                ->on('responsables')
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
        Schema::dropIfExists('demandes');
    }
}
