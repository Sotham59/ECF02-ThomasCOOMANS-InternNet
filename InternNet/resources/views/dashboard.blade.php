<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex lg:justify-center">
            {{ __('Bienvenue sur votre espace entreprise') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Vos offres de stage en ligne: ") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
