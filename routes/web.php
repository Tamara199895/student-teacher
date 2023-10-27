<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RateBookController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'user-access:student'])->group(function () {
    Route::get('/student/home', [HomeController::class, 'studentHome'])->name('student.home');
    });
Route::middleware(['auth', 'user-access:teacher'])->group(function () {
Route::get('/teacher/home', [HomeController::class, 'teacherHome'])->name('teacher.home');
});
Route::resource('group', GroupController::class);
Route::resource('teacher', TeacherController::class);
Route::resource('ratebook', RateBookController::class);

