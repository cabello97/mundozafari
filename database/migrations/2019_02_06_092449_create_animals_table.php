<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('scientific');
            $table->string('photo');
            $table->string('description');
            $table->string('habitat');
            $table->unsignedInteger('region_id');
            $table->string('feeding');
            $table->boolean('danger',false);
            $table->timestamps();

            //Relaciones
            $table->foreign('region_id')->references('id')->on('regions');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
