<x-layout>
    <x-slot:heading>{{ $vinyle['title'] }}</x-slot:heading>

    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
            <!-- Image -->
            <div class="w-full self-stretch flex">
                <img class="w-full h-full object-cover" src="https://picsum.photos/600/400?random={{ $vinyle['id'] }}"
                    alt="{{ $vinyle['title'] }}" />
            </div>

            <!-- Détails -->
            <div class="space-y-6">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white">
                    {{ $vinyle['title'] }}
                </h1>
                <div>
                    @foreach ($vinyle->tags as $tag)
                        <span
                            class="{{ \App\Models\Tag::getBadgeClass($tag->name) }} text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>
                <p class="mb-1 text-gray-700 dark:text-gray-400 font-medium">
                    {{ $vinyle->artist->name }} | {{ $vinyle['year'] }}
                </p>
                <p class="text-lg text-gray-700 dark:text-gray-300">
                    <strong>Label :</strong> {{ $vinyle['label'] }}
                </p>
                <p class="text-lg text-gray-700 dark:text-gray-300">
                    {{ $vinyle['description'] }}
                </p>

                <a href="{{ url('/') }}"
                    class="inline-block px-5 py-3 text-lg font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 transition">
                    Retour à l'accueil
                </a>
            </div>
        </div>
    </div>


</x-layout>
