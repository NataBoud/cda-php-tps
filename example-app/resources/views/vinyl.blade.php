<x-layout>
    <x-slot:heading>{{ $vinyl['title'] }}</x-slot:heading>

   <div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
        <!-- Image -->
        <div class="w-full self-stretch flex">
            <img class="w-full h-full object-cover"
                src="https://picsum.photos/600/400?random={{ $vinyl['id'] }}" 
                alt="{{ $vinyl['title'] }}" />
        </div>

        <!-- Détails -->
        <div class="space-y-6">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">
                {{ $vinyl['title'] }}
            </h1>
            <p>
                <span
                    class="{{ \App\Models\Vinyl::getBadgeClass($vinyl['genre']) }} text-xs font-medium px-2.5 py-0.5 mb-4 rounded-sm">
                    {{ $vinyl['genre'] }}
                </span>
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300">
                <strong>Artiste :</strong> {{ $vinyl['artist'] }}
            </p>
            <p class="text-lg text-gray-700 dark:text-gray-300">
                <strong>Année :</strong> {{ $vinyl['year'] }}
            </p>
            <p class="text-lg text-gray-700 dark:text-gray-300">
                <strong>Label :</strong> {{ $vinyl['label'] }}
            </p>
            <p class="text-lg text-gray-700 dark:text-gray-300">
                {{ $vinyl['description'] }}
            </p>

            <a href="{{ url('/') }}"
                class="inline-block px-5 py-3 text-lg font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 transition">
                Retour à l'accueil
            </a>
        </div>
    </div>
</div>


</x-layout>
