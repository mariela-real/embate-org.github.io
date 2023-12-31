<?php
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ServiceRequestsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CarouselHomeController;
use App\Http\Controllers\Admin\CarouselAboutUsController;
use App\Http\Controllers\Admin\CarouselOpinionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mission', function () {
    return view('mission_vision.mission_vision');
});

Route::get('/pre_incubation', function () {
    return view('pre_incubation.pre_incubation');
});

Route::get('/incubation', function () {
    return view('incubation.incubation');
});

Route::get('/post_incubation', function () {
    return view('post_incubation.post_incubation');
});

Route::get('/service', function () {
    return view('contact.advice');
});
Route::get('/fecha', function(){
    return view('inbox.reply_message');
});
Route::get('/navbar', function(){
    return view('admin.navbar');
});

/* ------------------------------------RUTAS EXTERNAS-------------------------------------------------- */
Route::get('/', [CarouselController::class, 'mainCarousel'])->name('/');
Route::get('/home', [CarouselController::class, 'mainCarousel'])->name('home');
Route::get('/about', [CarouselController::class, 'aboutUsCarousel'])->name('about');
Route::get('/motivation', [CarouselController::class, 'opinionsCarousel'])->name('motivacion');
Route::get('/team', [TeamController::class, 'showTeam'])->name('team');
Route::post('/home', [SubscriberController::class, 'registerSubscripter'])->name('home');
Route::get('/work', [WorkController::class, 'showWork'])->name('work');
Route::post('/service', [ServiceRequestsController::class, 'sendScheduleAdvice'])->name('service');

 /* ------------------------------------RUTAS CON INICIO DE SESION---------------------------------------- */
Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function(){return view('home');});
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);

    Route::get('/notifications', [ServiceRequestsController::class, 'messageReport'])->name('notifications');
    Route::get('/message/{id}', [ServiceRequestsController::class, 'show'])->name('message');
    Route::resource('/setting', SettingController::class);
/* --------------------------------------RUTAS "Inicio"----------------------------------------------- */
    Route::resource('/carousel', CarouselHomeController::class);
/* ------------------------------------RUTAS "A cerca de nosotros"------------------------------------- */
    Route::get('/about_us', function(){return view('admin.about_us.index'); });
    Route::resource('/aboutUs_carousel', CarouselAboutUsController::class);
    Route::resource('/team_profile', TeamController::class);
    Route::resource('/how_to_work', WorkController::class);
    Route::resource('/mission_vision', OrganizationController::class);
/* ------------------------------------RUTAS "Procesos"------------------------------------------------- */
    Route::resource('/opinions_carousel', CarouselOpinionController::class);
});
