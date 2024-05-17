<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicAffairsDepartmentMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicAffairsMembers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('function');
            $table->unsignedBigInteger('fk_academicAffairsMembers_id');
            $table->foreign('fk_academicAffairsMembers_id')->references('id')->on('academicAffairsDepartments')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
        Schema::dropIfExists('academicAffairsMembers');
    }
}
