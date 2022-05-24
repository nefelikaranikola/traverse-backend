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
        Schema::create('packagies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id');
            $table->string('title');
            $table->string('category');
            $table->string('excerpt');
            $table->string('description');
            $table->integer('price');
            $table->integer('overnight');
            $table->date('dates');
            $table->string('accommodation');
            $table->string('meals');
            $table->string('transportation');
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
        Schema::dropIfExists('packagies');
    }
};