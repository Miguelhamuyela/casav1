<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCultureAndSportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultureAndSports', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('category', 255);
            $table->longText('body');
            $table->date('date');
            $table->string('path');
            $table->softDeletes();
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
        Schema::dropIfExists("cultureAndSports");
    }
}
