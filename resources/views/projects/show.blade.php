<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $project->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                <p class="mb-4">{{ $project->description }}</p>
                <a 
                    class="bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 text-center font-semibold focus:outline-none" 
                    href="/projects/create">Go Back
                </a>
            </div>
        </div>
    </div>
</x-app-layout>