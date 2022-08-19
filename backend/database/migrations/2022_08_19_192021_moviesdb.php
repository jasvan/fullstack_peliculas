<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('img', 50);
            $table->string('titulo', 10);
            $table->string('date', 8);
            $table->string('qualification', 4);
            $table->string('qualificationFull', 4);
            $table->string('favorite', 30);
            $table->text('describe', 90);
            $table->string('runtime', 10);
            $table->string('mmpa', 6);
            $table->string('release',6);
            $table->string('Director', 15);
            $table->string('stars', 30);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
