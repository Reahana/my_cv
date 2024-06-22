<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\CVController;
use App\Http\Controllers\EmploymentHistoryController;
use App\Http\Controllers\AcademicQualificationController;
use App\Http\Controllers\TrainingSummaryController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\ObjectivesController;
use App\Http\Controllers\AwardsController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\VolunteerExperiencesController;

use App\Models\RoleRoute;

function getRoleName($routeName)
{
    $routesData = RoleRoute::where('route_name', $routeName)->get();
    $result = [];
    foreach ($routesData as $routeData) {
        array_push($result, $routeData->role_name);
    }
    return $result;
}
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

//Route::get('/', [HomeController::class, 'index']);
Route::get('/', [CVController::class, 'index'])->name('/');

Route::get('/post/add', [PostController::class, 'index'])->name('post.add')->middleware('roles');
Route::post('/post/new', [PostController::class, 'create'])->name('post.new');
Route::get('/post/manage', [PostController::class, 'manage'])->name('post.manage');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/post/update/{id}', [PostController::class, 'edit'])->name('post.update');
Route::post('/post/delete/{id}', [PostController::class, 'delete'])->name('post.delete');


Route::middleware([ 'auth:sanctum',  config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/role/add', [RoleController::class, 'index'])->name('role.add');
    Route::post('/role/new', [RoleController::class, 'create'])->name('role.new');
    Route::get('/role/manage', [RoleController::class, 'manage'])->name('role.manage');
    Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::post('/role/update/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::get('/role/delete/{id}', [RoleController::class, 'delete'])->name('role.delete');

    Route::get('/user/add', [UserController::class, 'index', ])->name('user.add');
    Route::post('/user/new', [UserController::class, 'create'])->name('user.new');
    Route::get('/user/manage', [UserController::class, 'manage'])->name('user.manage');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');


    //Personal Details


//    Career Objectives
    Route::get('/objectives/add', [ObjectivesController::class, 'index'])->name('objectives.add');
    Route::post('/objectives/new', [ObjectivesController::class, 'create'])->name('objectives.new');

//    Some of My Projects

//Special Qualification

//Employment History
    Route::get('/employment-history/add', [EmploymentHistoryController::class, 'index'])->name('employment.add');
    Route::post('/employment-history/new', [EmploymentHistoryController::class, 'create'])->name('employment.new');

    //Academic Qualification:
    Route::get('/academic-qualification/add', [AcademicQualificationController::class, 'index'])->name('academic.add');
    Route::post('/academic-qualification/new', [AcademicQualificationController::class, 'create'])->name('academic.new');

    //Awards/Achievements
    Route::get('/awards/add', [AwardsController::class, 'index'])->name('awards.add');
    Route::post('/awards/new', [AwardsController::class, 'create'])->name('awards.new');

//Training Summary
    Route::get('/training-summary/add', [TrainingSummaryController::class, 'index'])->name('training.add');
    Route::post('/training-summary/new', [TrainingSummaryController::class, 'create'])->name('training.new');

    //Languages:
    Route::get('/languages/add', [LanguagesController::class, 'index'])->name('languages.add');
    Route::post('/languages/new', [LanguagesController::class, 'create'])->name('languages.new');

    // Volunteer Experiences
    Route::get('/volunteer-experiences/add', [VolunteerExperiencesController::class, 'index'])->name('volunteer.add');
    Route::post('/volunteer-experiences/new', [VolunteerExperiencesController::class, 'create'])->name('volunteer.new');

//Reference
    Route::get('/reference/add', [ReferenceController::class, 'index'])->name('reference.add');
    Route::post('/reference/new', [ReferenceController::class, 'create'])->name('reference.new');
});
