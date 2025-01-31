<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FufaController;

Route::get('/', [function () {
    return view('welcome');
}]);

Route::get('/fufas', [FufaController::class, 'index'])->name('fufas.index');


Route::get('/fufas/create', [FufaController::class, 'create'])->name('fufas.create');

Route::get('/fufas/{fufa}', [FufaController::class, 'show'])->name('fufas.show');


Route::post('/fufas',[FufaController::class, 'store'])->name('fufas.store');
Route::delete('/fufas/{fufa}', [FufaController::class, 'destroy'])->name('fufas.destroy');