<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
/* noticias */

/**history */
route::get('/historia', ['as' => 'site.history', 'uses' => 'Site\HistoryController@index']);
/* history */

Route::get('/noticias', ['as' => 'site.news', 'uses' => 'Site\NewsController@index']);
Route::get('/noticia/{title}', ['as' => 'site.news.show', 'uses' => 'Site\NewsController@show']);

/* Galeria fotos */
Route::get('/galerias/', ['as' => 'site.gallery', 'uses' => 'Site\GalleryController@index']);
Route::get('/galeria/{name}', ['as' => 'site.gallery.show', 'uses' => 'Site\GalleryController@show']);


Route::get('/ciencia-e-tecnologia', ['as' => 'site.scienceAndTechnology', 'uses' => 'Site\ScienceAndTechnologyController@index']);
Route::get('/ciencia-e-tecnologia/{title}', ['as' => 'site.scienceAndTechnology.show', 'uses' => 'Site\ScienceAndTechnologyController@show']);



/* Galeria de Videos */
Route::get('/videos/', ['as' => 'site.videos', 'uses' => 'Site\VideoController@index']);


/**Contact */
Route::get('/contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@index']);

/** serviços */
Route::get('/servicos', ['as' => 'site.services', 'uses' => 'Site\ServiceController@index']);

/**route */
Route::get('/percurso', ['as' => 'site.route', 'uses' => 'Site\RouteController@index']);

/* anuncios */
Route::get('/anuncios', ['as' => 'site.announcent', 'uses' => 'Site\AnnouncementController@index']);
Route::get('/anuncio/{title}', ['as' => 'site.announcent.show', 'uses' => 'Site\AnnouncementController@show']);




/**Organogram */
Route::get('/organograma', ['as' => 'site.governingBodie', 'uses' => 'Site\GoverningBodieController@index']);
/**End Organogram */


/**ActinoPlan */
Route::get('/plano-de-accao', ['as' => 'site.actionPlan', 'uses' => 'Site\ActionPlanController@index']);
/**End ActinoPlan */



/**RequestStatement */
Route::get('/solicitacoes-de-declaracoes', ['as' => 'site.requestStatement', 'uses' => 'Site\RequestStatementController@index']);
/**End RequestStatement */

/**RequestStatement */
Route::get('/confirmacoes-de-Matrículas', ['as' => 'site.enrollmentConfirmations', 'uses' => 'Site\EnrollmentConfirmationsController@index']);
/**End RequestStatement */



/**RequestStatement */
Route::get('/inscricoes-de-extensao-Universitária', ['as' => 'site.universityExtensionEnrollment', 'uses' => 'Site\UniversityExtensionEnrollmentController@index']);
/**End RequestStatement */

/**Department of portuguese */
Route::get('/departamento-de-linguas-e-literatura-portuguesa', ['as' => 'site.departmentOfPortuguese', 'uses' => 'Site\DepartmentOfPortugueseController@index']);
/**End Department of portuguese */

/**Department of English */
Route::get('/departamento-de-linguas-e-literatura-inglesa', ['as' => 'site.departmentOfEnglish', 'uses' => 'Site\DepartmentOfEnglishController@index']);
/**End Department of English */

/**Department of Franch */
Route::get('/departamento-de-linguas-e-literatura-francesa', ['as' => 'site.departmentOfFranch', 'uses' => 'Site\DepartmentOfFranchController@index']);
/**End Department of Franch */

/**Department of Philosofy */
Route::get('/departamento-de-filosofia', ['as' => 'site.departmentOfPhilosofy', 'uses' => 'Site\DepartmentOfPhilosofyController@index']);
/**End Department of Philosofy */

/**Department of Executive */
Route::get('/departamento-secretariado-executivo-e-comunicacao-empresarial', ['as' => 'site.departmentOfExecutive', 'uses' => 'Site\DepartmentOfExecutiveController@index']);
/**End Department */

/**Department of Executive */
Route::get('/departamento-de-admnistracao-e-gestao-do-orcamento', ['as' => 'site.BudgetDepartment', 'uses' => 'Site\BudgetAndManagementDepartmentsController@index']);
/**End Department */

/**Department of Executive */
Route::get('/departamento-de-recursos-humanos', ['as' => 'site.HumanResourcesDepartment', 'uses' => 'Site\HumanResourcesDepartmentsController@index']);
/**End Department */

/**Department of Executive */
Route::get('/departamento-da-biblioteca', ['as' => 'site.LibraryDepartment', 'uses' => 'Site\LibraryDepartmentsController@index']);
/**End Department */

/**Department of Executive */
Route::get('/departamento-de-assuntos-academicos', ['as' => 'site.AcademicDepartment', 'uses' => 'Site\AcademicDepartmentsController@index']);
/**End Department */

/**Department of Executive */
Route::get('/departamento-de-documentacao-e-informacao', ['as' => 'site.DocumentationDepartment', 'uses' => 'Site\DocumentationDepartmentsController@index']);
/**End Department */

/**Department of Executive */
Route::get('/departamento-de-pos-graduacao-e-investigacao', ['as' => 'site.postgraduateDepartment', 'uses' => 'Site\PostgraduateAndResearchDepartmentsController@index']);
/**End Department */


/**Simposio */
Route::get('/simposio', ['as' => 'site.symposium', 'uses' => 'Site\SymposiumController@index']);
Route::get('/simposio/{title}', ['as' => 'site.symposium.show', 'uses' => 'Site\SymposiumController@show']);

/**End Simposio  */

/**Congress */
Route::get('/congresso', ['as' => 'site.congress', 'uses' => 'Site\CongressController@index']);
/**End Congress  */
Route::get('/congresso/{title}', ['as' => 'site.congress.show', 'uses' => 'Site\CongressController@show']);



/**Festivals */
Route::get('/festival', ['as' => 'site.festivals', 'uses' => 'Site\FestivalsController@index']);
/**End Festivals  */


Route::get('/festival/{title}', ['as' => 'site.festival.show', 'uses' => 'Site\FestivalsController@show']);


/**Fairs */
Route::get('/feiras', ['as' => 'site.fairs', 'uses' => 'Site\FairsController@index']);
Route::get('/feiras/{title}', ['as' => 'site.fairs.show', 'uses' => 'Site\FairsController@show']);

/**End Fairs  */

/**RequestStatement */
Route::get('/pautas', ['as' => 'site.guidelines', 'uses' => 'Site\GuidelinesController@index']);
/**End RequestStatement */

/**RequestStatement */
Route::get('/pagamentos-de-propinas', ['as' => 'site.feePayments', 'uses' => 'Site\FeePaymentsController@index']);
/**End RequestStatement */

/**Former Director */
Route::get('/ex-directores', ['as' => 'site.formerDirector', 'uses' => 'Site\FormerDirectorController@index']);
/**End Former Director */



/**Magazine */
Route::get('/revistas', ['as' => 'site.magazine', 'uses' => 'Site\MagazineController@index']);
/**End Magazine */

/**Magazine */
Route::get('/aulas', ['as' => 'site.classes', 'uses' => 'Site\ClassesController@index']);
/**End Magazine */

/**Miscellaneou */
Route::get('/diversos', ['as' => 'site.miscellaneou', 'uses' => 'Site\MiscellaneousController@index']);
/**End Miscellaneou */

/**Miscellaneou */
Route::get('/artigos-cientificos', ['as' => 'site.scientificArticle', 'uses' => 'Site\ScientificArticleController@index']);
/**End Miscellaneou */

/* licenciaturas */
Route::get('/licenciaturas', ['as' => 'site.graduatedCourse', 'uses' => 'Site\GraduatedCourseController@index']);
Route::get('/licenciaturas/{title}', ['as' => 'site.graduatedCourse.show', 'uses' => 'Site\GraduatedCourseController@show']);

/* mestrado */
Route::get('/mestrado', ['as' => 'site.MasterCourse', 'uses' => 'Site\MasterCourseController@index']);
Route::get('/mestrado/{title}', ['as' => 'site.MasterCourse.show', 'uses' => 'Site\MasterCourseController@show']);


/* mestrado */
Route::get('/doutoramentos', ['as' => 'site.DoctorateCourse', 'uses' => 'Site\DoctorateCourseController@index']);
Route::get('/doutoramentos/{title}', ['as' => 'site.DoctorateCourse.show', 'uses' => 'Site\MasterCourseController@show']);




/* policyPrivacy */
Route::get('/politicas-de-privacidade', ['as' => 'site.policyPrivacy', 'uses' => 'Site\PolicyPrivacyController@index']);

/* END SITE */



/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
