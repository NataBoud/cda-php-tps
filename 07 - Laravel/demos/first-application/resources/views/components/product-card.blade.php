{{-- Création d'un composant réutilisable dans les autres vue Blade --}}

{{-- Création d'une route à l'aide de son nom : nom-prefix.nom-route --}}
<a href="{{ route('products.details', $product['id']) }}"
    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product['name'] }}</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $product['description'] }}</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $product['price'] }}</p>
</a>
