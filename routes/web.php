<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserCourseController;
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
Route::get('/admin', function () {
    
    return view('Dashboard.layout.dashboard');
})->name('admin.index');

Route::resource('course',CourseController::class);
Route::resource('usercourse',UserCourseController::class);
Route::get('soft', [CourseController::class, 'showSoft'])->name('courses.softs');
Route::get('softdelet/{id}', [CourseController::class, 'softdelete'])->name('course.softdelete');
Route::get('course/restore/{id}', [CourseController::class, 'restore'])->name('courses.restore');