<?php

use Illuminate\Support\Facades\Route;
use App\Models\Vinyle;
use Illuminate\Http\Request;


Route::get('/', function () {
    $vinyles = Vinyle::with('artist')->paginate(3);
    return view('accueil', [ 'vinyles' => $vinyles ]);
});

Route::get('/search', function (Request $request) {
    $query = $request->input('query');
    $artist = $request->input('artist'); 
    $tags = $request->input('tags'); 
    $vinyles = Vinyle::search($query)
     ->paginate(3)
     ;

    return view('accueil', ['vinyles' => $vinyles, 'query' => $query]);

    // return response()->json($vinyles);
})->name('search');


Route::get('/vinyles/{id}', function ($id) {
    $vinyle = Vinyle::findOrFail($id);

    return view('vinyle', ['vinyle' => $vinyle]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
