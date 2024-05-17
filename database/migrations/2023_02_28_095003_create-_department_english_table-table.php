<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentEnglishTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departmentEnglishMembers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('subject');
            $table->string('degree');
            $table->unsignedBigInteger('fk_departmentEnglish_id');
            $table->foreign('fk_departmentEnglish_id')->references('id')->on('departmentOfEnglishs')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
       Schema::dropIfExists("departmentEnglishMembers");
    }
}
