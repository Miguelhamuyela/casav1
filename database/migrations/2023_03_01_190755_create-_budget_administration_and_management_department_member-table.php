<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetAdministrationAndManagementDepartmentMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrationMembers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('function');
            $table->unsignedBigInteger('fk_administrationMembers_id');
            $table->foreign('fk_administrationMembers_id')->references('id')->on('budgetAndManagementDepartments')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
        Schema::dropIfExists('administrationMembers');
    }
}
