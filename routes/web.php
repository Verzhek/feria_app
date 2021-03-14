<?php

use App\Http\Controllers\StandsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VisitsController;
use App\Http\Controllers\AuxController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::middleware("auth:sanctum")->group(function () {
    Route::any('/admin_eyes_only/stands', [StandsController::class,"index"]);
    Route::any('/admin_eyes_only/users', [UsersController::class,"index"]);
    Route::any('/admin_eyes_only/visits', [VisitsController::class,"index"]);
    Route::any('/dashboard', [AuxController::class,"to_dashboard"]);

    Route::delete('/admin_eyes_only/stands/delete/{id}',[StandsController::class,"destroy"]);
    Route::delete('/admin_eyes_only/visits/delete/{ind}',[VisitsController::class,"destroy"]);
    Route::delete('/admin_eyes_only/users/delete/{id}',[UsersController::class,"destroy"]);

});
Route::get('/register',[AuxController::class,"to_register"]);
require __DIR__.'/auth.php';
Route::get('/login',[AuxController::class,"to_login"]);
require __DIR__.'/auth.php';
