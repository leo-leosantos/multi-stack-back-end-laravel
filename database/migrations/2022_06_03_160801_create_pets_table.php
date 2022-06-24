<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{

    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();

            $table->string('nome', 50);
            $table->text('historia');
            $table->string('foto', 1000);

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
