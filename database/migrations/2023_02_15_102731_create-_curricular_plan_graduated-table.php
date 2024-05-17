<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurricularPlanGraduatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curricularPlanGraduateds', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('doc', 255);


            $table->unsignedBigInteger('fk_GraduatedCourse_id');
            $table->foreign('fk_GraduatedCourse_id')->references('id')->on('graduatedCourses')->onDelete('CASCADE')->onUpgrade('CASCADE');


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
        //
        Schema::dropIfExists("curricularPlanGraduated");
    }
}
