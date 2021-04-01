<?php
use App\Http\Controllers\AjaxController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/buy', [AjaxController::class,"store"])->middleware('auth:sanctum');

Route::delete('/reembolse', [AjaxController::class,"destroy"])->middleware('auth:sanctum');
