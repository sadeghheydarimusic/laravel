<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopmenusTable extends Migration
{

    public function up()
    {
        Schema::create('topmenus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menuname');
            $table->string('link_menu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('topmenus');
    }
}
