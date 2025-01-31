<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FufaController;

Route::get('/', [function () {
    return view('welcome');
}]);

Route::get('/fufas', [FufaController::class, 'index']);


Route::get('/fufas/create', [FufaController::class, 'create']);

Route::get('/fufas/{id}', [FufaController::class, 'show']);
