<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DevelopmentController;

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
})->name('home');

Route::get('/register', [RegisterController::class,'index'])->name('register');

Route::post('/register',[RegisterController::class,"store"])->name('register.store');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {

    Route::prefix('me')->group(function() {

        // Rutas para usuarios DEV
        Route::middleware('devRoute')->group(function() {
            
            Route::get('/dashboard', [DashboardController::class,"index"])->name('dashboard');

            Route::get('/development', [DevelopmentController::class,"index"])->name('development.index');

            Route::post('/development', [DevelopmentController::class,"store"])->name('development.store');

        });

        // Rutas para usuarios Cliente
        Route::get('/myapps', function() {
            return view('client.myapps');
        })->middleware('clientRoute')->name('myapps');

    });

});