<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostgraduateAndResearchDepartmentMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postgraduateMembers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('function');
            $table->unsignedBigInteger('fk_postgraduateMembers_id');
            $table->foreign('fk_postgraduateMembers_id')->references('id')->on('postgraduateAndResearchDepartments')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
        Schema::dropIfExists('postgraduateMembers');
    }
}
