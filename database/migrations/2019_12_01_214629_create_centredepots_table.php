<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentredepotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centredepots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('adressegeo', 255)->nullable();
            $table->double('latitude', 15, 8)->nullable()->default(123.4567);
            $table->double('longitude', 15, 8)->nullable()->default(123.4567);
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
        Schema::dropIfExists('centredepots');
    }
}
