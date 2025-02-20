<?php

use Illuminate\Support\Facades\Route;
use App\Models\Vinyle;
use App\Models\Tag;
use Illuminate\Http\Request;


Route::get('/', function () {
    $vinyles = Vinyle::with('artist')->paginate(3);
    return view('accueil', ['vinyles' => $vinyles]);
});

Route::get('/search', function (Request $request) {
    $query = $request->input('query');
    $tags = $request->input('tags', $query); // Utiliser `query` comme `tags` si `tags` est vide

    // Recherche par titre (Scout)
    $vinyleResults = Vinyle::search($query)->get(); // Récupère la collection

    if ($tags) {
        // Transformer en tableau
        $tagArray = explode(',', $tags);
        // Recherche des tags avec Scout
        $tagMatches = Tag::search(implode(' ', $tagArray))->get();

        if ($tagMatches->isNotEmpty()) {
            // Récupérer les IDs des vinyles liés aux tags
            $vinyleIds = $tagMatches->pluck('vinyles')->flatten()->pluck('id')->unique();

            if ($vinyleIds->isNotEmpty()) {
                // Fusionner la recherche par titre et par tags
                $vinylesQuery = Vinyle::whereIn('id', $vinyleIds)
                    ->orWhereIn('id', $vinyleResults->pluck('id')->toArray());
            } else {
                $vinylesQuery = Vinyle::whereIn('id', $vinyleResults->pluck('id')->toArray());
            }
        } else {
            $vinylesQuery = Vinyle::whereIn('id', $vinyleResults->pluck('id')->toArray());
        }
    } else {
        $vinylesQuery = Vinyle::whereIn('id', $vinyleResults->pluck('id')->toArray());
    }

    // Appliquer la pagination
    $vinyles = $vinylesQuery->paginate(3);

    return view('accueil', [
        'vinyles' => $vinyles,
        'query' => $query
    ]);
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
