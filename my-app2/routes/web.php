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

Route::get('/about', function () {
    return view('A propos');
})->name('about');

Route::post('/contact', function () {
    return view('contact');
})->name('contact');

// Route::name('article.')
//     ->prefix("article")
//     ->middleware('basicauth')
//     ->group(function () {
//         Route::get('/', 'index')->name('index')
//             ->withoutMiddleware('basicauth');
//         Route::get('/create', 'create')->name('create');
//         Route::post('/create', 'store')->name('store');
//         Route::get('/{id}/edit', 'edit')->name('edit');
//         Route::put('/{id}', 'update')->name('update');
//         Route::delete('/{id}', 'destroy')->name('destroy');
//     });

// Route::get('/regex/{date}', function ($date) {
//     return response()->json(['date' => $date]);
// })->where('date', '^\d{4}-\d{2}-\d{2}$');

