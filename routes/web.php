<?php

use App\Http\Controllers\AppsCollectionController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DevelopmentController;
use App\Http\Controllers\ShopController;
use App\Models\Application;


// HOME
Route::get('/', function () {
    return view('welcome');
})->name('home');

// REGISTRO
Route::get('/register', [RegisterController::class,'index'])->name('register');

Route::post('/register',[RegisterController::class,"store"])->name('register.store');

// USARIOS REGISTRADOS (DEV Y CLIENTES)
Route::middleware(['auth:sanctum', 'verified'])->group(function() {

    Route::prefix('me')->group(function() {

        // RUTAS PARA USUARIOS DEV
        Route::middleware('devRoute')->group(function() {
            
            Route::get('/dashboard', [DashboardController::class,"index"])->name('dashboard');

            Route::resource('development', DevelopmentController::class);

        });

        // RUTAS PARA USUARIOS CLIENTES
        Route::middleware('clientRoute')->group(function() {

            Route::get('/myapps', [AppsCollectionController::class,"index"])->name('myapps');

            Route::get('/myapps/{app}', [AppsCollectionController::class,"show"])->name('myapps.show');

            Route::get('/shop',[ShopController::class,"index"])->name('shop.index');

            Route::get('/shop/{app}',[ShopController::class,"show"])->name('shop.show');

        });

    });

});



