<?php

use App\Http\Controllers\BuyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/buy', [BuyController::class,"index"]);

Route::post('/buy', [BuyController::class,"show"]);

Route::delete('/buy/{id}', [ShopController::class,"destroy"]);
