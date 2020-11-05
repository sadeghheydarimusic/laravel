<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZirmenusTable extends Migration
{

    public function up()
    {
        Schema::create('zirmenus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menuname');
            $table->string('zirmenuname');
            $table->string('linkzirmenu');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('zirmenus');
    }
}
