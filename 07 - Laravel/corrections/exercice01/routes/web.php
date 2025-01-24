<?php

use App\Http\Middleware\BasicAuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hello';
});

// Partie 01
Route::get('/auth', function () {
    return 'Secret';
})->middleware([BasicAuthMiddleware::class]);

// Partie 02 : question 01
Route::get('/a-propos', fn() => 'A propos');

// Partie 02 : question 02
Route::post('/contact', fn(array $contactForm) => json_encode($contactForm));

// Partie 02 : question 03
Route::get('/article/{id}', fn(int $id) => "Article n°$id");

// Partie 02 : question 04
Route::prefix('/products/')
    ->group(function() 
    {
        Route::get('index', fn() => 'Welcome to product');
        Route::get('details/{id}', fn(int $id) => "Produit n°$id");
    });

    // Partie 02 : question 05
Route::get('/regex/{date}', function(string $date) {
    return $date;
})->where('date', '\d{4}(-\d{2}){2}');