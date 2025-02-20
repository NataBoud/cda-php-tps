<?php

use Illuminate\Support\Facades\Route;
use App\Models\Vinyl;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('accueil', [ 'vinyls' => Vinyl::all()]);
});

Route::get('/vinyls/{id}', function ($id) {  
    $vinyls = Vinyl::all();
    $vinyl = Arr::first($vinyls, fn($vinyl) => $vinyl['id'] == $id);

    if (!$vinyl) {
      return  abort(404, "Page n'est pas trouvé");
    }
    return view('vinyl', [ 'vinyl' => $vinyl ] );
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
