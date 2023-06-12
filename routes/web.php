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
    Route::get('/', [HomeController::class, 'index'])->name("admin.index");
    Route::get('soft', [UserController::class, 'showsoft'])->name('users.soft');
    Route::get('finldelet/{id}', [UserController::class, 'finldelet'])->name('user.finldelet');
    Route::get('user/restore/{id}', [UserController::class, 'restor'])->name('users.restore');
})->middleware('admin');

Route::prefix('home')->group(function () {

    Route::get('/', [UserCourseController::class, 'index'])->name("home.index");
    Route::resource('/corses', UserCourseController::class);
});
