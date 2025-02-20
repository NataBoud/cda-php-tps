<x-layout>
    <x-slot:heading>Accueil</x-slot:heading>

     <x-search class="my-4"></x-search>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($vinyles as $vinyle)
            <x-card :vinyle="$vinyle"></x-card>
        @endforeach
    </div>
    <div class="mt-5">
        {{ $vinyles->links() }}
    </div>
</x-layout>
