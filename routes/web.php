<?php

use App\Http\Controllers\AppDevelopController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

    Route::prefix('user')->group(function() {

        // Rutas para usuarios DEV
        Route::middleware('devRoute')->group(function() {
            
            Route::get('/dashboard', [DashboardController::class,"index"])->name('dashboard');

            //Route::resource('user', [AppDevelopController::class]);

        });

        // Rutas para usuarios Cliente
        Route::get('/myapps', function() {
            return view('client.myapps');
        })->middleware('clientRoute')->name('myapps');

    });

});