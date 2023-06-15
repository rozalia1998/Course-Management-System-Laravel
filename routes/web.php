<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCourseController;
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::prefix('admin')->group(function () {
    // Auth::routes();
    // Router::post('register',[RegisterController::class,'index']);
    Route::resource('/users', UserController::class);
    Route::resource('course',CourseController::class);
    Route::get('/', [HomeController::class, 'index'])->name("admin.index");
    Route::get('SoftUsers', [UserController::class, 'showsoft'])->name('user.soft');
    Route::get('finldelet/{id}', [UserController::class, 'finldelet'])->name('user.finldelet');
    Route::get('user/restore/{id}', [UserController::class, 'restor'])->name('users.restore');
    Route::get('SoftCourses', [CourseController::class, 'showSoft'])->name('courses.softs');
Route::get('softdelet/{id}', [CourseController::class, 'softdelete'])->name('course.softdelete');
Route::get('course/restore/{id}', [CourseController::class, 'restore'])->name('courses.restore');
    
})->middleware('admin');

Route::prefix('home')->group(function () {
    Route::get('corses/search', [CourseController::class, 'search'])->name('course.search');
    Route::get('/', [UserCourseController::class, 'index'])->name("home.index");
    Route::resource('/corses', UserCourseController::class);
    Route::get('show',[UserCourseController::class, 'showMyCourses'])->name("courses.showMyCourses");
    Route::get('/showUsersWithCourses', [UserCourseController::class ,'showUsersWithCourses'])->name('UserWithCourses');
    Route::get('/userEnrolledFront', [UserCourseController::class ,'userEnrolledFront'])->name('FrontUsers');
    Route::get('/morethan1000', [UserCourseController::class ,'morethan1000'])->name('Morethan1000');
});
