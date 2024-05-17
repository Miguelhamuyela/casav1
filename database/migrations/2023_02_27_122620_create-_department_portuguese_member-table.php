<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentPortugueseMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departmentPortugueseMembers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('subject');
            $table->string('degree');
            $table->unsignedBigInteger('fk_departmentPortuguese_id');
            $table->foreign('fk_departmentPortuguese_id')->references('id')->on('departmentOfPortugueses')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
        Schema::dropIfExists('departmentPortugueseMember');
    }
}
