<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personaldetails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('party')->nullable();
            $table->string('photo');
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->longText('description');
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('cover');
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
        Schema::dropIfExists('personaldetails');
    }
};
