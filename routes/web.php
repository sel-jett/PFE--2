<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SigningController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\RealtorCourseController;
use App\Http\Controllers\RealtorCourseImageController;

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

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('About-us', [IndexController::class, 'show'])->name('about-us');


Route::get('login', [AuthController::class, 'create'])
    ->name('login');
Route::post('login', [AuthController::class, 'store'])
    ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
    ->name('logout');


Route::resource('course', CourseController::class)->only(['index', 'show']);


Route::resource('user-account', UserAccountController::class)->only(['create', 'store']);


Route::prefix('realtor')
    ->name('realtor.')
    ->middleware('auth')
    ->group(function () {
        Route::resource('course', RealtorCourseController::class)
            ->only(['index', 'destroy', 'edit', 'update', 'create', 'store']);
        Route::resource('course.image', RealtorCourseImageController::class)
            ->only(['create', 'store']);
    });
