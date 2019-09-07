<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParrainagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parrainages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('observparr');
            $table->integer('id_parrain')->unsigned();
            $table->integer('id_annees')->unsigned();
            $table->integer('id_demande')->unsigned();
            $table->timestamps();

            $table->foreign('id_parrain')
                ->references('id')
                ->on('parains')
                ->onDelete('cascade');

            $table->foreign('id_annees')
                ->references('id')
                ->on('annee_scolaires')
                ->onDelete('cascade');

            $table->foreign('id_demande')
                ->references('id')
                ->on('demandes')
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
        Schema::dropIfExists('parrainages');
    }
}
