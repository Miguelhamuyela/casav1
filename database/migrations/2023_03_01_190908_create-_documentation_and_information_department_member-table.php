<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentationAndInformationDepartmentMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentationMembers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('function');
            $table->unsignedBigInteger('fk_documentationMembers_id');
            $table->foreign('fk_documentationMembers_id')->references('id')->on('documentationAndInformationDepartments')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
        Schema::dropIfExists('documentationMembers');
    }
}
