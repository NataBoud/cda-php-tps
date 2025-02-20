<x-layout>
    <x-slot:heading>Accueil</x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($vinyls as $vinyl)
        <x-card :vinyl="$vinyl"></x-card>
        @endforeach
    </div>

</x-layout>
