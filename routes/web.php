<?php

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuActionController;
use App\Http\Controllers\UserMenuActionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PrincipleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\NoticesController;
use App\Http\Controllers\UsefulController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AcademiccalenderController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\HolidaylistController;
use App\Http\Controllers\AdmissioninfoController;

use App\Http\Controllers\ExamroutineController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\LessonplanController;
use App\Http\Controllers\SuggestionController;

use App\Http\Controllers\ClassController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\SectionController;

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TeacherstaffController;
use App\Http\Controllers\SettingController;

use App\Http\Controllers\FrontendController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', [FrontendController::class, 'index']);
Route::get('/page/{id}', [FrontendController::class, 'page']);
Route::get('/principle_message', [FrontendController::class, 'principle_message']);
Route::get('/presidentmessage', [FrontendController::class, 'presidentmessage']);

Route::get('/managing_comitte', [FrontendController::class, 'managing_comitte']);
Route::get('/presidents', [FrontendController::class, 'presidents']);
Route::get('/principles', [FrontendController::class, 'principles']);
Route::get('/donar', [FrontendController::class, 'donar']);
Route::get('/ex_member', [FrontendController::class, 'ex_member']);
Route::get('/memberdetails/{id}', [FrontendController::class, 'memberdetails']);

Route::get('/teacherinfo', [FrontendController::class, 'teacherinfo']);
Route::get('/staffinfo', [FrontendController::class, 'staffinfo']);
Route::get('/teacherstaffdetails/{id}', [FrontendController::class, 'teacherstaffdetails']);

Route::get('/admissioninfo/{id}', [FrontendController::class, 'admissioninfo']);

Route::get('/examroutines', [FrontendController::class, 'examroutine']);
Route::get('/examsyllabus', [FrontendController::class, 'examsyllabus']);
Route::get('/examsuggession', [FrontendController::class, 'examsuggession']);

Route::get('/academiccalenders', [FrontendController::class, 'academiccalenders']);
Route::get('/classroutines', [FrontendController::class, 'classroutines']);
Route::get('/holidaylists', [FrontendController::class, 'holidaylist']);



Route::get('/allnotices', [FrontendController::class, 'allnotices']);
Route::get('/photogallery', [FrontendController::class, 'photogallery']);
Route::get('/videogallery', [FrontendController::class, 'videogallery']);

Route::get('/noticesdetails/{id}', [FrontendController::class, 'notices']);
Route::get('/events', [FrontendController::class, 'events']);



Route::get('/agreements', [FrontendController::class, 'agreements']);
Route::get('/industrialattachment', [FrontendController::class, 'industrialattachment']);
Route::get('/industriesvisit', [FrontendController::class, 'industriesvisit']);
Route::get('/nearindustries', [FrontendController::class, 'nearindustries']);
Route::get('/internalresult/{id}', [FrontendController::class, 'internalresult']);

Route::get('/class_routine/{id}', [FrontendController::class, 'class_routine']);
Route::get('/syllabuss/{id}', [FrontendController::class, 'syllabus']);
Route::get('/semesterplans/{id}', [FrontendController::class, 'semesterplan']);
Route::get('/probidhans', [FrontendController::class, 'probidhan']);

Route::get('/aboutdepartments/{id}', [FrontendController::class, 'aboutdepartment']);
Route::get('/departmentteacher/{id}', [FrontendController::class, 'departmentteacher']);
Route::get('/departmentteacherdetails/{id}', [FrontendController::class, 'departmentteacherdetails']);


Route::get('/principledetails', [FrontendController::class, 'principledetails']);
Route::get('/viceprincipledetails', [FrontendController::class, 'viceprincipledetails']);
Route::get('/previousprinciples', [FrontendController::class, 'previousprinciples']);
Route::get('/prevprincipledetails/{id}', [FrontendController::class, 'prevprincipledetails']);


Route::get('/departmentemployee/{id}', [FrontendController::class, 'departmentemployee']);
Route::get('/departmentemployeedetails/{id}', [FrontendController::class, 'departmentemployeedetails']);


Route::get('/departmenthead/{id}', [FrontendController::class, 'departmenthead']);
Route::get('/departmentstudent/{id}', [FrontendController::class, 'departmentstudent']);
Route::get('/departmentstudentdetails/{id}', [FrontendController::class, 'departmentstudentdetails']);


Route::get('/principledetails', [FrontendController::class, 'principledetails']);
Route::get('/viceprincipledetails', [FrontendController::class, 'viceprincipledetails']);
Route::get('/Previous_Principles', [FrontendController::class, 'Previous_Principles']);




Auth::routes();


Route::get('/member/login', [LoginController::class, 'showMemberLoginForm'])->name('member.login-view');
Route::post('/member/login', [LoginController::class, 'memberLogin'])->name('member.login');

// member routes
// Route::get('/member', function () {
//     return redirect()->url('member/dashboard');
// });

Route::group(['middleware' => ['member'], 'prefix' => 'member'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Member\DashboardController::class, 'index'])->name('member.dashboard');
    Route::get('/profile', [\App\Http\Controllers\Member\DashboardController::class, 'profile'])->name('member.profile');
});


Route::any('lang/{lang}', function ($lang) {
    session()->put('lang', $lang);
    return redirect()->back();
})->name('lang');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //    Route::get('user/permission/{id}', 'UserController@permission')->name('user.permission');
//    Route::post('user/permission-update/{id}', 'UserController@permissionUpdate')->name('user.permission_update');
//    Route::post('get_role_permission', 'RoleController@getRolePermission')->name('get_role_permission');
//    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile-update', [UserController::class, 'profileUpdate'])->name('user.profile-update');
    Route::post('/change-password', [UserController::class, 'changePassword'])->name('user.change-password');
    Route::post('/user/print', [UserController::class, 'print'])->name('user.print');
    Route::post('/user/status', [UserController::class, 'status'])->name('user.status');
    Route::get('/user/deleted-list', [UserController::class, 'deletedListIndex'])->name('user.deleted_list');
    Route::get('/user/restore/{id}', [UserController::class, 'restore'])->name('user.restore');
    Route::delete('/user/force-delete/{id}', [UserController::class, 'forceDelete'])->name('user.force_destroy');
    Route::resource('user', UserController::class);

    Route::post('/menu/status', 'MenuController@status')->name('menu.status');
    Route::get('/menu/deleted-list', 'MenuController@deletedListIndex')->name('menu.deleted_list');
    Route::get('/menu/restore/{id}', 'MenuController@restore')->name('menu.restore');
    Route::delete('/menu/force-delete/{id}', 'MenuController@forceDelete')->name('menu.force_destroy');
    Route::post('/menu/multiple-delete', 'MenuController@multipleDelete')->name('menu.multiple_delete');
    Route::post('/menu/multiple-restore', 'MenuController@multipleRestore')->name('menu.multiple_restore');
    Route::resource('menu', MenuController::class);


    Route::post('/menu_action/status', 'MenuActionController@status')->name('menu_action.status');
    Route::get('/menu-action/deleted-list', 'MenuActionController@deletedListIndex')->name('menu_action.deleted_list');
    Route::get('/menu-action/restore/{id}', 'MenuActionController@restore')->name('menu_action.restore');
    Route::delete('/menu-action/force-delete/{id}', 'MenuActionController@forceDelete')->name('menu_action.force_destroy');
    Route::resource('menu_action', MenuActionController::class);

    Route::post('member/print', [MemberController::class, 'print'])->name('member.print');
    Route::post('member/status', [MemberController::class, 'status'])->name('member.status');
    Route::get('/member/deleted-list', [MemberController::class, 'deletedListIndex'])->name('member.deleted_list');
    Route::get('/member/restore/{id}', [MemberController::class, 'restore'])->name('member.restore');
    Route::delete('/member/force-delete/{id}', [MemberController::class, 'forceDelete'])->name('member.force_destroy');

    Route::resources([
        'aboutus' => AboutUsController::class,
        'webiste_info' => WebsiteInformation::class,
        'photo_gallery' => PhotoGallery::class,
        'services' => ServiceController::class,
        'project_cat' => ProjectCategorey::class,
        'project_info' => ProjectController::class,
        'testimonial' => TestimonialController::class,
        'member' => MemberController::class,
        'team' => TeamController::class,
        'messages' => MessageController::class,
        'vedio_gallery' => VedioGallery::class,
    ]);

    Route::get('retrive_message/{id}', [MessageController::class, 'retrive_message']);
    Route::get('permenantMessageDelete/{id}', [MessageController::class, 'permenantMessageDelete']);


    Route::post('photoGalleryStatusChange', [PhotoGallery::class, 'photoGalleryStatusChange']);
    Route::get('retrive_photo/{id}', [PhotoGallery::class, 'retrive_photo']);
    Route::get('permenant_delete/{id}', [PhotoGallery::class, 'permenant_delete']);


    Route::get('retrive_service/{id}', [ServiceController::class, 'retrive_service']);
    Route::get('service_per_delete/{id}', [ServiceController::class, 'service_per_delete']);
    Route::post('serviceStatusChange', [ServiceController::class, 'serviceStatusChange']);

    Route::get('retrive_project_cat/{id}', [ProjectCategorey::class, 'retrive_project_cat']);
    Route::get('permenantDeleteProjectCat/{id}', [ProjectCategorey::class, 'permenantDeleteProjectCat']);
    Route::post('projectCatStatus', [ProjectCategorey::class, 'projectCatStatus']);

    Route::post('projectStatus', [ProjectController::class, 'projectStatus']);
    Route::get('retrive_project/{id}', [ProjectController::class, 'retrive_project']);
    Route::get('project_per_delete/{id}', [ProjectController::class, 'project_per_delete']);


    Route::post('testimonialStatus', [TestimonialController::class, 'testimonialStatus']);
    Route::get('retrive_testimonial/{id}', [TestimonialController::class, 'retrive_testimonial']);
    Route::get('testimonial_per_delete/{id}', [TestimonialController::class, 'testimonial_per_delete']);

    Route::post('teamMemberStatus', [TeamController::class, 'teamMemberStatus']);
    Route::get('retrive_teammember/{id}', [TeamController::class, 'retrive_teammember']);
    Route::get('temameber_per_delete/{id}', [TeamController::class, 'temameber_per_delete']);


    Route::post('vedioStatus', [VedioGallery::class, 'vedioStatus']);
    Route::get('retrive_vedio/{id}', [VedioGallery::class, 'retrive_vedio']);
    Route::get('vedio_per_delete/{id}', [VedioGallery::class, 'vedio_per_delete']);


    Route::get('menu/action/{menu_id}', [UserMenuActionController::class, 'index'])->name('user_menu_action.index');
    Route::get('menu/action/create/{menu_id}', [UserMenuActionController::class, 'create'])->name('user_menu_action.create');
    Route::post('menu/action/store/{menu_id}', [UserMenuActionController::class, 'store'])->name('user_menu_action.store');
    Route::get('menu/action/edit/{menu_id}/{id}', [UserMenuActionController::class, 'edit'])->name('user_menu_action.edit');
    Route::delete('menu/action/destroy/{menu_id}/{id}', [UserMenuActionController::class, 'destroy'])->name('user_menu_action.destroy');
    Route::post('menu/action/update/{menu_id}/{id}', [UserMenuActionController::class, 'update'])->name('user_menu_action.update');
    Route::post('user/menu/action/status', [UserMenuActionController::class, 'status'])->name('user_menu_action.status');

    Route::get('/role/{id}/permission', [RoleController::class, 'permission'])->name('role.permission');
    Route::post('/role/{id}/permission', [RoleController::class, 'permission'])->name('role.permission.store');
    Route::post('role/print', [RoleController::class, 'print'])->name('role.print');
    Route::post('role/status', [RoleController::class, 'status'])->name('role.status');
    Route::get('/role/deleted-list', [RoleController::class, 'deletedListIndex'])->name('role.deleted_list');
    Route::get('/role/restore/{id}', [RoleController::class, 'restore'])->name('role.restore');
    Route::delete('/role/force-delete/{id}', [RoleController::class, 'forceDelete'])->name('role.force_destroy');
    Route::resource('role', RoleController::class);

    Route::resource('permission', PermissionController::class);

    // My Route

    Route::resource('pages', PagesController::class);
    Route::resource('principle', PrincipleController::class);
    Route::resource('photogallerys', PhotoController::class);
    Route::resource('videogallerys', VideoController::class);
    Route::resource('notices', NoticesController::class);
    Route::resource('usefullink', UsefulController::class);
    Route::resource('members', MemberController::class);

    Route::resource('academiccalender', AcademiccalenderController::class);
    Route::resource('holidaylist', HolidaylistController::class);

    Route::resource('admissioninfo', AdmissioninfoController::class);

    Route::resource('addclass', ClassController::class);
    Route::resource('addgroup', GroupController::class);
    Route::resource('addsection', SectionController::class);
    Route::get('getgroup/{class_id}', [SectionController::class, 'getgroup']);
    
    Route::resource('classroutine', RoutineController::class);

    Route::resource('examroutine', ExamroutineController::class);
    Route::resource('syllabus', SyllabusController::class);
    Route::resource('lessonplan', LessonplanController::class);
    Route::resource('suggestion', SuggestionController::class);

    Route::resource('department', DepartmentController::class);
    Route::resource('teacherstaff', TeacherstaffController::class);


    Route::resource('setting', SettingController::class);



});
