<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomparain');
            $table->string('postparain');
            $table->string('prenparain');
            $table->integer('id_adresse')->unsigned();
            $table->timestamps();

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
        Schema::dropIfExists('parains');
    }
}
