<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Middleware\DateMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Configuration des routes de l'applications
Route::get('/hello-world', fn() => 'Hello World!');
Route::get('/hello-world/title', fn() => '<h1>Hello World!</h1>');
Route::get('/hello-world/title/{id}', fn($id) => "id: $id");

// Laravel inclut un méchanisme d'injection de dépendances dans les routes
// Cela nous permet de récupérer la requête envoyée
Route::get('/requests', function (Request $request) {
    return $request->getMethod();
});

// Utilisation de la redirection
Route::redirect('/ici', '/la');

// Rediriger directement vers une vue avec des paramètres
Route::view('/hello-world-view', 'hello-world', ['name' => 'jean']);

// Utilisation des méthodes where pour filtrer les paramètres de route
Route::get('/only-number/{number}', fn(int $number) => $number)->whereNumber('number');

Route::get('/users')->name('users');

Route::middleware([DateMiddleware::class])->group(function () {
    Route::get('/check-middleware', function (Request $request) {
        return $request->dateJour;
    });
});

// Mapping d'une route sur un controller
Route::name('home.')
    ->prefix('home')
    ->controller(HomeController::class)
    ->group(function () {
        // On définit la route et l'action qui sera utilisée dans le controller
        // grâce au prefix, le nom de la route correspond à : home.index
        Route::get('/', 'index')->name('index');
        Route::get('/redirect', 'redirectToIndex')->name('redirect');
    });

Route::name('products.')
    ->prefix('products')
    ->controller(ProductsController::class)
    ->group(function()
    {
        // liste des produits
        Route::get('/', 'index')->name('index');
        // détail d'un produit
        Route::get('/details/{id}', 'details')->name('details');
        // page de création d'un produit
        Route::get('/create', 'create')->name('create');
        // peristance du produit
        Route::post('/', 'store')->name('store');
    });
