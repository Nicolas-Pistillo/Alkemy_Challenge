<?php

use App\Http\Controllers\AppsCollectionController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DevelopmentController;
use App\Http\Controllers\ShopController;
use App\Models\Application;

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

            Route::get('/development/{id}', [DevelopmentController::class,"show"])->name('development.show');

            Route::get('/development/{id}/edit', [DevelopmentController::class,"edit"])->name('development.edit');

            Route::put('/development/{id}',[DevelopmentController::class,"update"])->name('development.update');

            Route::delete('/development/{id}', [DevelopmentController::class,"destroy"])->name('development.destroy');

            //Route::resource('development', [DevelopmentController::class]);

        });

        // Rutas para usuarios Cliente
        Route::middleware('clientRoute')->group(function() {

            Route::get('/myapps', [AppsCollectionController::class,"index"])->name('myapps');

            Route::get('/shop',[ShopController::class,"index"])->name('shop.index');
        });

    });

});



