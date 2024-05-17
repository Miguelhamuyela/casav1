<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Editor;
use App\Http\Middleware\Administrador;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/* Grupo de rotas autenticadas */

Route::middleware(['auth'])->group(function () {
    /* Manager Dashboard  */
    route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

    Route::middleware([Administrador::class])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(Administrador::class);

        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(Administrador::class);;
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(Administrador::class);;

        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */
    });
    Route::middleware([Editor::class])->group(function () {
        /* gallery */
        Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@list']);
        Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);
        Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
        Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);
        Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
        Route::put('admin/gallery/update/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);
        Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
        /* end gallery */

        /* imageGallery */
        Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
        Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);

        Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
        /* End imageGallery */




/** end alumni gallery */

        /* video */
        Route::get('admin/video/index', ['as' => 'admin.video.index', 'uses' => 'Admin\VideoController@list']);
        Route::get('admin/video/show/{id}', ['as' => 'admin.video.show', 'uses' => 'Admin\VideoController@show']);

        Route::get('admin/video/create', ['as' => 'admin.video.create', 'uses' => 'Admin\VideoController@create']);
        Route::post('admin/video/store', ['as' => 'admin.video.store', 'uses' => 'Admin\VideoController@store']);

        Route::get('admin/video/edit/{id}', ['as' => 'admin.video.edit', 'uses' => 'Admin\VideoController@edit']);
        Route::put('admin/video/update/{id}', ['as' => 'admin.video.update', 'uses' => 'Admin\VideoController@update']);

        Route::get('admin/video/delete/{id}', ['as' => 'admin.video.delete', 'uses' => 'Admin\VideoController@destroy']);
        /* end video */

        /* slideshow */
        Route::get('admin/slideshow/index', ['as' => 'admin.slideshow.index', 'uses' => 'Admin\SlideShowController@list']);
        Route::get('admin/slideshow/show/{id}', ['as' => 'admin.slideshow.show', 'uses' => 'Admin\SlideShowController@show']);

        Route::get('admin/slideshow/create', ['as' => 'admin.slideshow.create', 'uses' => 'Admin\SlideShowController@create']);
        Route::post('admin/slideshow/store', ['as' => 'admin.slideshow.store', 'uses' => 'Admin\SlideShowController@store']);

        Route::get('admin/slideshow/edit/{id}', ['as' => 'admin.slideshow.edit', 'uses' => 'Admin\SlideShowController@edit']);
        Route::put('admin/slideshow/update/{id}', ['as' => 'admin.slideshow.update', 'uses' => 'Admin\SlideShowController@update']);

        Route::get('admin/slideshow/delete/{id}', ['as' => 'admin.slideshow.delete', 'uses' => 'Admin\SlideShowController@destroy']);
        /* end slideshow */



        /* news */
        Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@list']);
        Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);

        Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
        Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);

        Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
        Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);

        Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy']);
        /* end news */


        /* ScienceAndTechnology */
        Route::get('admin/ciencia-e-tecnologia/index', ['as' => 'admin.scienceAndTechnology.index', 'uses' => 'Admin\ScienceAndTechnologyController@list']);
        Route::get('admin/ciencia-e-tecnologia/show/{id}', ['as' => 'admin.scienceAndTechnology.show', 'uses' => 'Admin\ScienceAndTechnologyController@show']);

        Route::get('admin/ciencia-e-tecnologia/create', ['as' => 'admin.scienceAndTechnology.create', 'uses' => 'Admin\ScienceAndTechnologyController@create']);
        Route::post('admin/ciencia-e-tecnologia/store', ['as' => 'admin.scienceAndTechnology.store', 'uses' => 'Admin\ScienceAndTechnologyController@store']);

        Route::get('admin/ciencia-e-tecnologia/edit/{id}', ['as' => 'admin.scienceAndTechnology.edit', 'uses' => 'Admin\ScienceAndTechnologyController@edit']);
        Route::put('admin/ciencia-e-tecnologia/update/{id}', ['as' => 'admin.scienceAndTechnology.update', 'uses' => 'Admin\ScienceAndTechnologyController@update']);

        Route::get('admin/ciencia-e-tecnologia/delete/{id}', ['as' => 'admin.scienceAndTechnology.delete', 'uses' => 'Admin\ScienceAndTechnologyController@destroy']);
        /* end ScienceAndTechnology */

         /* ScienceAndTechnology */
         Route::get('admin/cultura-e-desporto/index', ['as' => 'admin.cultureAndSport.index', 'uses' => 'Admin\CultureAndSportController@list']);
         Route::get('admin/cultura-e-desporto/show/{id}', ['as' => 'admin.cultureAndSport.show', 'uses' => 'Admin\CultureAndSportController@show']);

         Route::get('admin/cultura-e-desporto/create', ['as' => 'admin.cultureAndSport.create', 'uses' => 'Admin\CultureAndSportController@create']);
         Route::post('admin/cultura-e-desporto/store', ['as' => 'admin.cultureAndSport.store', 'uses' => 'Admin\CultureAndSportController@store']);

         Route::get('admin/cultura-e-desporto/edit/{id}', ['as' => 'admin.cultureAndSport.edit', 'uses' => 'Admin\CultureAndSportController@edit']);
         Route::put('admin/cultura-e-desporto/update/{id}', ['as' => 'admin.cultureAndSport.update', 'uses' => 'Admin\CultureAndSportController@update']);

         Route::get('admin/cultura-e-desporto/delete/{id}', ['as' => 'admin.cultureAndSport.delete', 'uses' => 'Admin\CultureAndSportController@destroy']);
         /* end ScienceAndTechnology */

                /* Graduated */

                Route::get('admin/licenciaturas/show', ['as' => 'admin.graduatedCourse.show', 'uses' => 'Admin\GraduatedCourseController@show']);
                Route::get('admin/licenciaturas/edit/{id}', ['as' => 'admin.graduatedCourse.edit', 'uses' => 'Admin\GraduatedCourseController@edit']);
                Route::put('admin/licenciaturas/update/{id}', ['as' => 'admin.graduatedCourse.update', 'uses' => 'Admin\GraduatedCourseController@update']);
                /* end Graduated */

                   /* Master */
                   Route::get('admin/mestrado/show', ['as' => 'admin.MasterCourse.show', 'uses' => 'Admin\MasterCourseController@show']);
                   Route::get('admin/mestrado/edit/{id}', ['as' => 'admin.MasterCourse.edit', 'uses' => 'Admin\MasterCourseController@edit']);
                   Route::put('admin/mestrado/update/{id}', ['as' => 'admin.MasterCourse.update', 'uses' => 'Admin\MasterCourseController@update']);
                /* end Master */


                           /* Master */
                           Route::get('admin/doutoramento/show', ['as' => 'admin.DoctorateCourse.show', 'uses' => 'Admin\DoctorateCourseController@show']);
                           Route::get('admin/doutoramento/edit/{id}', ['as' => 'admin.DoctorateCourse.edit', 'uses' => 'Admin\DoctorateCourseController@edit']);
                           Route::put('admin/doutoramento/update/{id}', ['as' => 'admin.DoctorateCourse.update', 'uses' => 'Admin\DoctorateCourseController@update']);
                    /* end Master */




                    Route::get('admin/Plano-Curricular-Licenciatura/create/{id}', ['as' => 'admin.CurricularPlanGraduated.create', 'uses' => 'Admin\CurricularPlanGraduatedController@create']);
                    Route::post('admin/Plano-Curricular-Licenciatura/store/{id}', ['as' => 'admin.CurricularPlanGraduated.store', 'uses' => 'Admin\CurricularPlanGraduatedController@store']);
                    Route::get('admin/Plano-Curricular-Licenciatura/delete/{id}', ['as' => 'admin.CurricularPlanGraduated.delete', 'uses' => 'Admin\CurricularPlanGraduatedController@destroy']);

                    Route::get('admin/Plano-Curricular-Doutoramento/create/{id}', ['as' => 'admin.CurricularPlanDoctorate.create', 'uses' => 'Admin\CurricularPlanDoctorateController@create']);
                    Route::post('admin/Plano-Curricular-Doutoramento/store/{id}', ['as' => 'admin.CurricularPlanDoctorate.store', 'uses' => 'Admin\CurricularPlanDoctorateController@store']);
                    Route::get('admin/Plano-Curricular-Doutoramento/delete/{id}', ['as' => 'admin.CurricularPlanDoctorate.delete', 'uses' => 'Admin\CurricularPlanDoctorateController@destroy']);

                    Route::get('admin/Plano-Curricular-Mestrado/create/{id}', ['as' => 'admin.CurricularPlanMaster.create', 'uses' => 'Admin\CurricularPlanMasterController@create']);
                    Route::post('admin/Plano-Curricular-Mestrado/store/{id}', ['as' => 'admin.CurricularPlanDMaster.store', 'uses' => 'Admin\CurricularPlanMasterController@store']);
                    Route::get('admin/Plano-Curricular-Mestrado/delete/{id}', ['as' => 'admin.CurricularPlanMaster.delete', 'uses' => 'Admin\CurricularPlanMasterController@destroy']);







        /* parceiros */
        Route::get('admin/parceiros/index', ['as' => 'admin.partner.index', 'uses' => 'Admin\PartnersController@index']);
        Route::get('admin/parceiros/show/{id}', ['as' => 'admin.partner.show', 'uses' => 'Admin\PartnersController@show']);
        Route::get('admin/parceiros/create', ['as' => 'admin.partner.create', 'uses' => 'Admin\PartnersController@create']);
        Route::post('admin/parceiros/store', ['as' => 'admin.partner.store', 'uses' => 'Admin\PartnersController@store']);
        Route::get('admin/parceiros/edit/{id}', ['as' => 'admin.partner.edit', 'uses' => 'Admin\PartnersController@edit']);
        Route::put('admin/parceiros/update/{id}', ['as' => 'admin.partner.update', 'uses' => 'Admin\PartnersController@update']);
        Route::get('admin/parceiros/delete/{id}', ['as' => 'admin.partner.delete', 'uses' => 'Admin\PartnersController@destroy']);
        /* end parceiros */






         /*GraduationStatistic Start*/
         Route::get('admin/licenciados/show', ['as' => 'admin.graduation.show', 'uses' => 'Admin\GraduationStatisticsController@show']);
          Route::get('admin/licenciados/edit/{id}', ['as' => 'admin.graduation.edit', 'uses' => 'Admin\GraduationStatisticsController@edit']);
         Route::put('admin/licenciados/update/{id}', ['as' => 'admin.graduation.update', 'uses' => 'Admin\GraduationStatisticsController@update']);
        /*GraduationStatistic End */

          /*MasterStatistic Start*/
          Route::get('admin/mestrados/show', ['as' => 'admin.master.show', 'uses' => 'Admin\MasterStatisticsController@show']);
          Route::get('admin/mestrados/edit/{id}', ['as' => 'admin.master.edit', 'uses' => 'Admin\MasterStatisticsController@edit']);
         Route::put('admin/mestrados/update/{id}', ['as' => 'admin.master.update', 'uses' => 'Admin\MasterStatisticsController@update']);
        /*MasterStatistic End */


         /*DoutoramentoStatistic Start*/
         Route::get('admin/doutoramentos/show', ['as' => 'admin.doctorate.show', 'uses' => 'Admin\DoctorateStatisticsController@show']);
         Route::get('admin/doutoramentos/edit/{id}', ['as' => 'admin.doctorate.edit', 'uses' => 'Admin\DoctorateStatisticsController@edit']);
        Route::put('admin/doutoramentos/update/{id}', ['as' => 'admin.doctorate.update', 'uses' => 'Admin\DoctorateStatisticsController@update']);
       /*DoutoramentoStatistic End */



       /* Plano de acção */
       Route::get('admin/plano_de_accao/index', ['as' => 'admin.actionPlanRoles.index', 'uses' => 'Admin\ActionPlanRolesController@list']);
       Route::get('admin/plano_de_accao/show/{id}', ['as' => 'admin.actionPlanRoles.show', 'uses' => 'Admin\ActionPlanRolesController@show']);

       Route::get('admin/plano_de_accao/create', ['as' => 'admin.actionPlanRoles.create', 'uses' => 'Admin\ActionPlanRolesController@create']);
       Route::post('admin/plano_de_accao/store', ['as' => 'admin.actionPlanRoles.store', 'uses' => 'Admin\ActionPlanRolesController@store']);

       Route::get('admin/plano_de_accao/edit/{id}', ['as' => 'admin.actionPlanRoles.edit', 'uses' => 'Admin\ActionPlanRolesController@edit']);
       Route::put('admin/plano_de_accao/update/{id}', ['as' => 'admin.actionPlanRoles.update', 'uses' => 'Admin\ActionPlanRolesController@update']);

       Route::get('admin/plano_de_accao/delete/{id}', ['as' => 'admin.actionPlanRoles.delete', 'uses' => 'Admin\ActionPlanRolesController@destroy']);
       /* end Plano de Acção */


       /*DepartmentOfPortuguese Start*/
      Route::get('admin/departamento-de-linguas-e-literatura-portuguesa/show', ['as' => 'admin.departmentOfPortuguese.show', 'uses' => 'Admin\DepartmentOfPortugueseController@show']);
      Route::get('admin/departamento-de-linguas-e-literatura-portuguesa/edit/{id}', ['as' => 'admin.departmentOfPortuguese.edit', 'uses' => 'Admin\DepartmentOfPortugueseController@edit']);
     Route::put('admin/departamento-de-linguas-e-literatura-portuguesa/update/{id}', ['as' => 'admin.departmentOfPortuguese.update', 'uses' => 'Admin\DepartmentOfPortugueseController@update']);
    /*DepartmentOfPortuguese End */


        /*DoutoramentoStatistic Start*/
        Route::get('admin/plano-de-accao/show', ['as' => 'admin.actionPlan.show', 'uses' => 'Admin\ActionPlanController@show']);
        Route::get('admin/plano-de-accao/edit/{id}', ['as' => 'admin.actionPlan.edit', 'uses' => 'Admin\ActionPlanController@edit']);
       Route::put('admin/plano-de-accao/update/{id}', ['as' => 'admin.actionPlan.update', 'uses' => 'Admin\ActionPlanController@update']);
      /*DoutoramentoStatistic End */


      /*PostGraduatedDepartment Start*/
      Route::get('admin/departamento-de-pos-graduacao-e-investigacao/show', ['as' => 'admin.postgraduateDepartment.show', 'uses' => 'Admin\PostgraduateAndResearchDepartmentsController@show']);
      Route::get('admin/departamento-de-pos-graduacao-e-investigacao/edit/{id}', ['as' => 'admin.postgraduateDepartment.edit', 'uses' => 'Admin\PostgraduateAndResearchDepartmentsController@edit']);
     Route::put('admin/departamento-de-pos-graduacao-e-investigacao/update/{id}', ['as' => 'admin.postgraduateDepartment.update', 'uses' => 'Admin\PostgraduateAndResearchDepartmentsController@update']);
    /*PostGraduatedDepartment End */

    Route::get('admin/funcionario-do-departamento-de-pos-graduacao-e-investigacao/create/{id}', ['as' => 'admin.postgraduateDepartmentMember.create', 'uses' => 'Admin\PostgraduateAndResearchDepartmentsMemberController@create']);
    Route::post('admin/funcionario-do-departamento-de-pos-graduacao-e-investigacao/store/{id}', ['as' => 'admin.postgraduateDepartmentMember.store', 'uses' => 'Admin\PostgraduateAndResearchDepartmentsMemberController@store']);
    Route::get('admin/funcionario-do-departamento-de-pos-graduacao-e-investigacao/delete/{id}', ['as' => 'admin.postgraduateDepartmentMember.delete', 'uses' => 'Admin\PostgraduateAndResearchDepartmentsMemberController@destroy']);


    /*DocumentationDepartment Start*/
    Route::get('admin/departamento-de-documentacao-e-informacao/show', ['as' => 'admin.DocumentationDepartment.show', 'uses' => 'Admin\DocumentationAndInformationDepartmentsController@show']);
    Route::get('admin/departamento-de-documentacao-e-informacao/edit/{id}', ['as' => 'admin.DocumentationDepartment.edit', 'uses' => 'Admin\DocumentationAndInformationDepartmentsController@edit']);
   Route::put('admin/departamento-de-documentacao-e-informacao/update/{id}', ['as' => 'admin.DocumentationDepartment.update', 'uses' => 'Admin\DocumentationAndInformationDepartmentsController@update']);
  /*DocumentationDepartment End */

  Route::get('admin/funcionario-do-departamento-de-documentacao-e-informacao/create/{id}', ['as' => 'admin.DocumentationDepartmentMember.create', 'uses' => 'Admin\DocumentationAndInformationDepartmentsMemberController@create']);
  Route::post('admin/funcionario-do-departamento-de-documentacao-e-informacao/store/{id}', ['as' => 'admin.DocumentationDepartmentMember.store', 'uses' => 'Admin\DocumentationAndInformationDepartmentsMemberController@store']);
  Route::get('admin/funcionario-do-departamento-de-documentacao-e-informacao/delete/{id}', ['as' => 'admin.DocumentationDepartmentMember.delete', 'uses' => 'Admin\DocumentationAndInformationDepartmentsMemberController@destroy']);

  /*AccademicDepartment Start*/
  Route::get('admin/departamento-de-assuntos-academicos/show', ['as' => 'admin.AcademicDepartment.show', 'uses' => 'Admin\AcademicAffairsDepartmentsController@show']);
  Route::get('admin/departamento-de-assuntos-academicos/edit/{id}', ['as' => 'admin.AcademicDepartment.edit', 'uses' => 'Admin\AcademicAffairsDepartmentsController@edit']);
 Route::put('admin/departamento-de-assuntos-academicos/update/{id}', ['as' => 'admin.AcademicDepartment.update', 'uses' => 'Admin\AcademicAffairsDepartmentsController@update']);
/*AccademicDepartment End */

Route::get('admin/funcionario-do-departamento-de-assuntos-academicos/create/{id}', ['as' => 'admin.AcademicDepartmentMember.create', 'uses' => 'Admin\AcademicAffairsDepartmentsMemberController@create']);
Route::post('admin/funcionario-do-departamento-de-assuntos-academicos/store/{id}', ['as' => 'admin.AcademicDepartmentMember.store', 'uses' => 'Admin\AcademicAffairsDepartmentsMemberController@store']);
Route::get('admin/funcionario-do-departamento-de-assuntos-academicos/delete/{id}', ['as' => 'admin.AcademicDepartmentMember.delete', 'uses' => 'Admin\AcademicAffairsDepartmentsMemberController@destroy']);


/*LibraryDepartment Start*/
Route::get('admin/departamento-da-biblioteca/show', ['as' => 'admin.LibraryDepartment.show', 'uses' => 'Admin\LibraryDepartmentsController@show']);
Route::get('admin/departamento-da-biblioteca/edit/{id}', ['as' => 'admin.LibraryDepartment.edit', 'uses' => 'Admin\LibraryDepartmentsController@edit']);
Route::put('admin/departamento-da-biblioteca/update/{id}', ['as' => 'admin.LibraryDepartment.update', 'uses' => 'Admin\LibraryDepartmentsController@update']);
/*LibraryDepartment End */

Route::get('admin/funcionario-do-departamento-da-biblioteca/create/{id}', ['as' => 'admin.LibraryDepartmentMember.create', 'uses' => 'Admin\LibraryDepartmentsMemberController@create']);
Route::post('admin/funcionario-do-departamento-da-biblioteca/store/{id}', ['as' => 'admin.LibraryDepartmentMember.store', 'uses' => 'Admin\LibraryDepartmentsMemberController@store']);
Route::get('admin/funcionario-do-departamento-da-biblioteca/delete/{id}', ['as' => 'admin.LibraryDepartmentMember.delete', 'uses' => 'Admin\LibraryDepartmentsMemberController@destroy']);



/*HumanResourcesDepartment Start*/
Route::get('admin/departamento-de-recursos-humanos/show', ['as' => 'admin.HumanResourcesDepartment.show', 'uses' => 'Admin\HumanResourcesDepartmentsController@show']);
Route::get('admin/departamento-de-recursos-humanos/edit/{id}', ['as' => 'admin.HumanResourcesDepartment.edit', 'uses' => 'Admin\HumanResourcesDepartmentsController@edit']);
Route::put('admin/departamento-de-recursos-humanos/update/{id}', ['as' => 'admin.HumanResourcesDepartment.update', 'uses' => 'Admin\HumanResourcesDepartmentsController@update']);
/*HumanResourcesDepartment End */

Route::get('admin/funcionario-do-departamento-de-recursos-humanos/create/{id}', ['as' => 'admin.HumanResourcesDepartmentMember.create', 'uses' => 'Admin\HumanResourcesDepartmentsMemberController@create']);
Route::post('admin/funcionario-do-departamento-de-recursos-humanos/store/{id}', ['as' => 'admin.HumanResourcesDepartmentMember.store', 'uses' => 'Admin\HumanResourcesDepartmentsMemberController@store']);
Route::get('admin/funcionario-do-departamento-de-recursos-humanos/delete/{id}', ['as' => 'admin.HumanResourcesDepartmentMember.delete', 'uses' => 'Admin\HumanResourcesDepartmentsMemberController@destroy']);

/*BudgetDepartment Start*/
Route::get('admin/departamento-de-admnistracao-e-gestao-do-orcamento/show', ['as' => 'admin.BudgetDepartment.show', 'uses' => 'Admin\BudgetAndManagementDepartmentsController@show']);
Route::get('admin/departamento-de-admnistracao-e-gestao-do-orcamento/edit/{id}', ['as' => 'admin.BudgetDepartment.edit', 'uses' => 'Admin\BudgetAndManagementDepartmentsController@edit']);
Route::put('admin/departamento-de-admnistracao-e-gestao-do-orcamento/update/{id}', ['as' => 'admin.BudgetDepartment.update', 'uses' => 'Admin\BudgetAndManagementDepartmentsController@update']);
/*BudgetDepartment End */

Route::get('admin/funcionario-do-departamento-de-admnistracao-e-gestao-do-orcamento/create/{id}', ['as' => 'admin.BudgetDepartmentMember.create', 'uses' => 'Admin\BudgetAndManagementDepartmentsMemberController@create']);
Route::post('admin/funcionario-do-departamento-de-admnistracao-e-gestao-do-orcamento/store/{id}', ['as' => 'admin.BudgetDepartmentMember.store', 'uses' => 'Admin\BudgetAndManagementDepartmentsMemberController@store']);
Route::get('admin/funcionario-do-departamento-de-admnistracao-e-gestao-do-orcamento/delete/{id}', ['as' => 'admin.BudgetDepartmentMember.delete', 'uses' => 'Admin\BudgetAndManagementDepartmentsMemberController@destroy']);




    Route::get('admin/docente-do-departamento-de-literatura-portuguesa/create/{id}', ['as' => 'admin.memberOfPortugueseDepartment.create', 'uses' => 'Admin\DepartmentPortugueseMemberController@create']);
    Route::post('admin/docente-do-departamento-de-literatura-portuguesa/store/{id}', ['as' => 'admin.memberOfPortugueseDepartment.store', 'uses' => 'Admin\DepartmentPortugueseMemberController@store']);
    Route::get('admin/docente-do-departamento-de-literatura-portuguesa/delete/{id}', ['as' => 'admin.memberOfPortugueseDepartment.delete', 'uses' => 'Admin\DepartmentPortugueseMemberController@destroy']);


    Route::get('admin/docente-do-departamento-de-literatura-inglesa/create/{id}', ['as' => 'admin.memberOfEnglishDepartment.create', 'uses' => 'Admin\DepartmentEnglishMemberController@create']);
    Route::post('admin/docente-do-departamento-de-literatura-inglesa/store/{id}', ['as' => 'admin.memberOfEnglishDepartment.store', 'uses' => 'Admin\DepartmentEnglishMemberController@store']);
    Route::get('admin/docente-do-departamento-de-literatura-inglesa/delete/{id}', ['as' => 'admin.memberOfEnglishDepartment.delete', 'uses' => 'Admin\DepartmentEnglishMemberController@destroy']);

      /*DepartmentOfEnglish Start*/
      Route::get('admin/departamento-de-linguas-e-literatura-inglesa/show', ['as' => 'admin.departmentOfEnglish.show', 'uses' => 'Admin\DepartmentOfEnglishController@show']);
      Route::get('admin/departamento-de-linguas-e-literatura-inglesa/edit/{id}', ['as' => 'admin.departmentOfEnglish.edit', 'uses' => 'Admin\DepartmentOfEnglishController@edit']);
     Route::put('admin/departamento-de-linguas-e-literatura-inglesa/update/{id}', ['as' => 'admin.departmentOfEnglish.update', 'uses' => 'Admin\DepartmentOfEnglishController@update']);
    /*DepartmentOfEnglish End */


    Route::get('admin/docente-do-departamento-de-literatura-francesa/create/{id}', ['as' => 'admin.memberOfFranchDepartment.create', 'uses' => 'Admin\DepartmentFranchMemberController@create']);
    Route::post('admin/docente-do-departamento-de-literatura-francesa/store/{id}', ['as' => 'admin.memberOfFranchDepartment.store', 'uses' => 'Admin\DepartmentFranchMemberController@store']);
    Route::get('admin/docente-do-departamento-de-literatura-francesa/delete/{id}', ['as' => 'admin.memberOfFranchDepartment.delete', 'uses' => 'Admin\DepartmentFranchMemberController@destroy']);

      /*DepartmentOfFranch Start*/
      Route::get('admin/departamento-de-linguas-e-literatura-francesa/show', ['as' => 'admin.departmentOfFranch.show', 'uses' => 'Admin\DepartmentOfFranchController@show']);
      Route::get('admin/departamento-de-linguas-e-literatura-francesa/edit/{id}', ['as' => 'admin.departmentOfFranch.edit', 'uses' => 'Admin\DepartmentOfFranchController@edit']);
     Route::put('admin/departamento-de-linguas-e-literatura-francesa/update/{id}', ['as' => 'admin.departmentOfFranch.update', 'uses' => 'Admin\DepartmentOfFranchController@update']);
    /*DepartmentOfFranch End */


    Route::get('admin/docente-do-departamento-de-filosofia/create/{id}', ['as' => 'admin.memberOfPhilosofyDepartment.create', 'uses' => 'Admin\DepartmentPhilosofyMemberController@create']);
    Route::post('admin/docente-do-departamento-de-filosofia/store/{id}', ['as' => 'admin.memberOfPhilosofyDepartment.store', 'uses' => 'Admin\DepartmentPhilosofyMemberController@store']);
    Route::get('admin/docente-do-departamento-de-filosofia/delete/{id}', ['as' => 'admin.memberOfPhilosofyDepartment.delete', 'uses' => 'Admin\DepartmentPhilosofyMemberController@destroy']);

      /*DepartmentOfPhilosofy Start*/
      Route::get('admin/departamento-de-filosofia/show', ['as' => 'admin.departmentOfPhilosofy.show', 'uses' => 'Admin\DepartmentOfPhilosofyController@show']);
      Route::get('admin/departamento-de-filosofia/edit/{id}', ['as' => 'admin.departmentOfPhilosofy.edit', 'uses' => 'Admin\DepartmentOfPhilosofyController@edit']);
     Route::put('admin/departamento-de-filosofia/update/{id}', ['as' => 'admin.departmentOfPhilosofy.update', 'uses' => 'Admin\DepartmentOfPhilosofyController@update']);
    /*DepartmentOfPhilosofy End */


    Route::get('admin/docente-do-departamento-secretariado-executivo-e-comunicacao-empresarial/create/{id}', ['as' => 'admin.memberOfDepartmentSecretariatExecutive.create', 'uses' => 'Admin\DepartmentExecutiveMemberController@create']);
    Route::post('admin/docente-do-departamento-secretariado-executivo-e-comunicacao-empresarial/store/{id}', ['as' => 'admin.memberOfDepartmentSecretariatExecutive.store', 'uses' => 'Admin\DepartmentExecutiveMemberController@store']);
    Route::get('admin/docente-do-departamento-secretariado-executivo-e-comunicacao-empresarial/delete/{id}', ['as' => 'admin.memberOfDepartmentSecretariatExecutive.delete', 'uses' => 'Admin\DepartmentExecutiveMemberController@destroy']);

      /*DepartmentOfPhilosofy Start*/
      Route::get('admin/departamento-secretariado-executivo-e-comunicacao-empresarial/show', ['as' => 'admin.departmentOfExecutive.show', 'uses' => 'Admin\DepartmentOfExecutiveController@show']);
      Route::get('admin/departamento-secretariado-executivo-e-comunicacao-empresarial/edit/{id}', ['as' => 'admin.departmentOfExecutive.edit', 'uses' => 'Admin\DepartmentOfExecutiveController@edit']);
     Route::put('admin/departamento-secretariado-executivo-e-comunicacao-empresarial/update/{id}', ['as' => 'admin.departmentOfExecutive.update', 'uses' => 'Admin\DepartmentOfExecutiveController@update']);
    /*DepartmentOfPhilosofy End */




        /*Miscellaneous Start*/
        Route::get('admin/diversos/index', ['as' => 'admin.miscellaneous.index', 'uses' => 'Admin\MiscellaneousController@list']);
        Route::get('admin/diversos/show/{id}', ['as' => 'admin.miscellaneous.show', 'uses' => 'Admin\MiscellaneousController@show']);
        Route::get('admin/diversos/create', ['as' => 'admin.miscellaneous.create', 'uses' => 'Admin\MiscellaneousController@create']);
        Route::post('admin/diversos/store', ['as' => 'admin.miscellaneous.store', 'uses' => 'Admin\MiscellaneousController@store']);
        Route::get('admin/diversos/edit/{id}', ['as' => 'admin.miscellaneous.edit', 'uses' => 'Admin\MiscellaneousController@edit']);
        Route::put('admin/diversos/update/{id}', ['as' => 'admin.miscellaneous.update', 'uses' => 'Admin\MiscellaneousController@update']);
        Route::get('admin/diversos/delete/{id}', ['as' => 'admin.miscellaneous.delete', 'uses' => 'Admin\MiscellaneousController@destroy']);
        /*Miscellaneous End */


        /**Governing Bodies */
        Route::get('admin/orgaos-directivos/index', ['as' => 'admin.governingBodie.index', 'uses' => 'Admin\GoverningBodieController@list']);
        Route::get('admin/orgaos-directivos/show/{id}', ['as' => 'admin.governingBodie.show', 'uses' => 'Admin\GoverningBodieController@show']);

        Route::get('admin/orgaos-directivos/create', ['as' => 'admin.governingBodie.create', 'uses' => 'Admin\GoverningBodieController@create']);
        Route::post('admin/orgaos-directivos/store', ['as' => 'admin.governingBodie.store', 'uses' => 'Admin\GoverningBodieController@store']);

        Route::get('admin/orgaos-directivos/edit/{id}', ['as' => 'admin.governingBodie.edit', 'uses' => 'Admin\GoverningBodieController@edit']);
        Route::put('admin/orgaos-directivos/update/{id}', ['as' => 'admin.governingBodie.update', 'uses' => 'Admin\GoverningBodieController@update']);

        Route::get('admin/orgaos-directivos/delete/{id}', ['as' => 'admin.governingBodie.delete', 'uses' => 'Admin\GoverningBodieController@destroy']);
        /**End Governing Bodies */



        /*ScientificArticle Start*/
        Route::get('admin/artigos-cientificos/index', ['as' => 'admin.scientificArticle.index', 'uses' => 'Admin\ScientificArticleController@list']);
        Route::get('admin/artigos-cientificos/show/{id}', ['as' => 'admin.scientificArticle.show', 'uses' => 'Admin\ScientificArticleController@show']);
        Route::get('admin/artigos-cientificos/create', ['as' => 'admin.scientificArticle.create', 'uses' => 'Admin\ScientificArticleController@create']);
        Route::post('admin/artigos-cientificos/store', ['as' => 'admin.scientificArticle.store', 'uses' => 'Admin\ScientificArticleController@store']);
        Route::get('admin/artigos-cientificos/edit/{id}', ['as' => 'admin.scientificArticle.edit', 'uses' => 'Admin\ScientificArticleController@edit']);
        Route::put('admin/artigos-cientificos/update/{id}', ['as' => 'admin.scientificArticle.update', 'uses' => 'Admin\ScientificArticleController@update']);
        Route::get('admin/artigos-cientificos/delete/{id}', ['as' => 'admin.scientificArticle.delete', 'uses' => 'Admin\ScientificArticleController@destroy']);
        /*ScientificArticle End */


        /*ScientificArticle Start*/
        Route::get('admin/artigos-cientificos/index', ['as' => 'admin.scientificArticle.index', 'uses' => 'Admin\ScientificArticleController@list']);
        Route::get('admin/artigos-cientificos/show/{id}', ['as' => 'admin.scientificArticle.show', 'uses' => 'Admin\ScientificArticleController@show']);
        Route::get('admin/artigos-cientificos/create', ['as' => 'admin.scientificArticle.create', 'uses' => 'Admin\ScientificArticleController@create']);
        Route::post('admin/artigos-cientificos/store', ['as' => 'admin.scientificArticle.store', 'uses' => 'Admin\ScientificArticleController@store']);
        Route::get('admin/artigos-cientificos/edit/{id}', ['as' => 'admin.scientificArticle.edit', 'uses' => 'Admin\ScientificArticleController@edit']);
        Route::put('admin/artigos-cientificos/update/{id}', ['as' => 'admin.scientificArticle.update', 'uses' => 'Admin\ScientificArticleController@update']);
        Route::get('admin/artigos-cientificos/delete/{id}', ['as' => 'admin.scientificArticle.delete', 'uses' => 'Admin\ScientificArticleController@destroy']);
        /*ScientificArticle End */


         /*Classes Start*/
         Route::get('admin/aulas/index', ['as' => 'admin.classes.index', 'uses' => 'Admin\ClassesController@list']);
         Route::get('admin/aulas/show/{id}', ['as' => 'admin.classes.show', 'uses' => 'Admin\ClassesController@show']);
         Route::get('admin/aulas/create', ['as' => 'admin.classes.create', 'uses' => 'Admin\ClassesController@create']);
         Route::post('admin/aulas/store', ['as' => 'admin.classes.store', 'uses' => 'Admin\ClassesController@store']);
         Route::get('admin/aulas/edit/{id}', ['as' => 'admin.classes.edit', 'uses' => 'Admin\ClassesController@edit']);
         Route::put('admin/aulas/update/{id}', ['as' => 'admin.classes.update', 'uses' => 'Admin\ClassesController@update']);
         Route::get('admin/aulas/delete/{id}', ['as' => 'admin.classes.delete', 'uses' => 'Admin\ClassesController@destroy']);
         /*Classes End */


              /*Symposium Start*/
              Route::get('admin/simposio/index', ['as' => 'admin.symposium.index', 'uses' => 'Admin\SymposiumController@list']);
              Route::get('admin/simposio/show/{id}', ['as' => 'admin.symposium.show', 'uses' => 'Admin\SymposiumController@show']);
              Route::get('admin/simposio/create', ['as' => 'admin.symposium.create', 'uses' => 'Admin\SymposiumController@create']);
              Route::post('admin/simposio/store', ['as' => 'admin.symposium.store', 'uses' => 'Admin\SymposiumController@store']);
              Route::get('admin/simposio/edit/{id}', ['as' => 'admin.symposium.edit', 'uses' => 'Admin\SymposiumController@edit']);
              Route::put('admin/simposio/update/{id}', ['as' => 'admin.symposium.update', 'uses' => 'Admin\SymposiumController@update']);
              Route::get('admin/simposio/delete/{id}', ['as' => 'admin.symposium.delete', 'uses' => 'Admin\SymposiumController@destroy']);
              /*Symposium End */



              /*Congress Start*/
              Route::get('admin/congresso/index', ['as' => 'admin.congress.index', 'uses' => 'Admin\CongressController@list']);
              Route::get('admin/congresso/show/{id}', ['as' => 'admin.congress.show', 'uses' => 'Admin\CongressController@show']);
              Route::get('admin/congresso/create', ['as' => 'admin.congress.create', 'uses' => 'Admin\CongressController@create']);
              Route::post('admin/congresso/store', ['as' => 'admin.congress.store', 'uses' => 'Admin\CongressController@store']);
              Route::get('admin/congresso/edit/{id}', ['as' => 'admin.congress.edit', 'uses' => 'Admin\CongressController@edit']);
              Route::put('admin/congresso/update/{id}', ['as' => 'admin.congress.update', 'uses' => 'Admin\CongressController@update']);
              Route::get('admin/congresso/delete/{id}', ['as' => 'admin.congress.delete', 'uses' => 'Admin\CongressController@destroy']);
              /*Congress End */


               /*Festivals Start*/
               Route::get('admin/festival/index', ['as' => 'admin.festivals.index', 'uses' => 'Admin\FestivalsController@list']);
               Route::get('admin/festival/show/{id}', ['as' => 'admin.festivals.show', 'uses' => 'Admin\FestivalsController@show']);
               Route::get('admin/festival/create', ['as' => 'admin.festivals.create', 'uses' => 'Admin\FestivalsController@create']);
               Route::post('admin/festival/store', ['as' => 'admin.festivals.store', 'uses' => 'Admin\FestivalsController@store']);
               Route::get('admin/festival/edit/{id}', ['as' => 'admin.festivals.edit', 'uses' => 'Admin\FestivalsController@edit']);
               Route::put('admin/festival/update/{id}', ['as' => 'admin.festivals.update', 'uses' => 'Admin\FestivalsController@update']);
               Route::get('admin/festival/delete/{id}', ['as' => 'admin.festivals.delete', 'uses' => 'Admin\FestivalsController@destroy']);
               /*Festivals End */


        /*Fairs Start*/
        Route::get('admin/feira/index', ['as' => 'admin.fairs.index', 'uses' => 'Admin\FairsController@list']);
        Route::get('admin/feira/show/{id}', ['as' => 'admin.fairs.show', 'uses' => 'Admin\FairsController@show']);
        Route::get('admin/feira/create', ['as' => 'admin.fairs.create', 'uses' => 'Admin\FairsController@create']);
        Route::post('admin/feira/store', ['as' => 'admin.fairs.store', 'uses' => 'Admin\FairsController@store']);
        Route::get('admin/feira/edit/{id}', ['as' => 'admin.fairs.edit', 'uses' => 'Admin\FairsController@edit']);
        Route::put('admin/feira/update/{id}', ['as' => 'admin.fairs.update', 'uses' => 'Admin\FairsController@update']);
        Route::get('admin/feira/delete/{id}', ['as' => 'admin.fairs.delete', 'uses' => 'Admin\FairsController@destroy']);
        /*Fairs End */





         /*Revistas Start*/
         Route::get('admin/revistas/index', ['as' => 'admin.magazine.index', 'uses' => 'Admin\MagazineController@list']);
         Route::get('admin/revistas/show/{id}', ['as' => 'admin.magazine.show', 'uses' => 'Admin\MagazineController@show']);
         Route::get('admin/revistas/create', ['as' => 'admin.magazine.create', 'uses' => 'Admin\MagazineController@create']);
         Route::post('admin/revistas/store', ['as' => 'admin.magazine.store', 'uses' => 'Admin\MagazineController@store']);
         Route::get('admin/revistas/edit/{id}', ['as' => 'admin.magazine.edit', 'uses' => 'Admin\MagazineController@edit']);
         Route::put('admin/revistas/update/{id}', ['as' => 'admin.magazine.update', 'uses' => 'Admin\MagazineController@update']);
         Route::get('admin/revistas/delete/{id}', ['as' => 'admin.magazine.delete', 'uses' => 'Admin\MagazineController@destroy']);
         /*Revistas End */


        /* history */
        Route::get('admin/historia/show', ['as' => 'admin.history.show', 'uses' => 'Admin\HistoryController@show']);
        Route::get('admin/historia/edit/{id}', ['as' => 'admin.history.edit', 'uses' => 'Admin\HistoryController@edit']);
        Route::put('admin/historia/update/{id}', ['as' => 'admin.history.update', 'uses' => 'Admin\HistoryController@update']);
        /* end donation */

        /* configuration */
        Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);

        Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
        Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
        /* end configuration */
    });
});
