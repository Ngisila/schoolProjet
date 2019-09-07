<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrequentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequenters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_enfant')->unsigned();
            $table->integer('id_annees')->unsigned();
            $table->integer('id_classe')->unsigned();
            $table->timestamps();

            $table->foreign('id_enfant')
                ->references('id')
                ->on('enfants')
                ->onDelete('cascade');

            $table->foreign('id_annees')
                ->references('id')
                ->on('annee_scolaires')
                ->onDelete('cascade');

            $table->foreign('id_classe')
                ->references('id')
                ->on('classes')
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
        Schema::dropIfExists('frequenters');
    }
}
