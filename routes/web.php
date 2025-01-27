<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fufas', function () {
    $fufas = [
        ["name" => "mario", "skill" => 75, "id" => "1"],
        ["name" => "luigi", "skill" => 45, "id" => "2"],
    ];
    return view('fufas.index', ["greeting" => "Hello", "fufas" => $fufas]);
});


Route::get('/fufas/{id}', function ($id) {

    return view('fufas.show', ["id" => $id]);
});
