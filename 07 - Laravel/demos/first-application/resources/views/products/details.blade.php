{{-- Utilisation de l'héritage pour utiliser le layout principal --}}
@extends('layouts.main')

{{-- Modification du titre de la page --}}
@section('title', $product['name'])

{{-- Modification du contenu de la page --}}
@section('content')
<section class="grid place-items-center">
    {{-- Utilisation du composant produit --}}
    <x-product-card :$product/>
</section>
@endsection
