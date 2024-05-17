<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congress', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->longText('body');
            $table->string('startTime', 255);
            $table->string('endTime');
            $table->string('localization');
            $table->string('dateEvent');
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
        Schema::dropIfExists("congress");
    }
}
