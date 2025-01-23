<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['basicauth'])->group(function () {
    Route::get('/test', function () {
        return response()->json(['message' => 'Vous êtes authentifié !']);
    });
});