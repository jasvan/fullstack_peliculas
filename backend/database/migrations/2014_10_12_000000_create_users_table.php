<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 15);
            $table->string('email', 45)->unique();
            $table->string('cellphone', 15);
            $table->string('password', 30);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
};
