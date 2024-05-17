<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibraryDepartmentMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraryMembers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('function');
            $table->unsignedBigInteger('fk_libraryMembers_id');
            $table->foreign('fk_libraryMembers_id')->references('id')->on('libraryDepartments')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
        Schema::dropIfExists('libraryMembers');
    }
}
