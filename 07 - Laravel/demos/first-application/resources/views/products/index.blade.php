@extends('layouts.main')

@section('title', 'Products')

@section('content')
    <section class="flex flex-row gap-6 flex-wrap justify-center">
        <a href="{{route('products.create')}}">Create a product</a>
        @foreach ($products as $product)
            <x-product-card :$product/>
        @endforeach
    </section>
@endsection
