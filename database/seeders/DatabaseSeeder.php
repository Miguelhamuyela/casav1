<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Department::factory(1)->create();
        \App\Models\BudgetAndManagementDepartment::factory(1)->create();
        \App\Models\HumanResourcesDepartment::factory(1)->create();
        \App\Models\LibraryDepartment::factory(1)->create();
        \App\Models\AcademicAffairsDepartment::factory(1)->create();
        \App\Models\DocumentationAndInformationDepartment::factory(1)->create();
        \App\Models\PostgraduateAndResearchDepartment::factory(1)->create();

        \App\Models\DepartmentOfPortuguese::factory(1)->create();
        \App\Models\DepartmentOfFranch::factory(1)->create();
        \App\Models\DepartmentOfEnglish::factory(1)->create();
        \App\Models\DepartmentOfPhilosofy::factory(1)->create();
        \App\Models\DepartmentExecutiveSecretariat::factory(1)->create();
        \App\Models\ActionPlan::factory(1)->create();
        \App\Models\MasterCourse::factory(1)->create();
        \App\Models\DoctorateCourse::factory(1)->create();
        \App\Models\GraduatedCourse::factory(1)->create();
        \App\Models\DoctorateStatistic::factory(1)->create();
        \App\Models\MasterStatistic::factory(1)->create();
        \App\Models\GraduationStatistic::factory(1)->create();
        \App\Models\History::factory(1)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\Configuration::factory(1)->create();

    }
}
