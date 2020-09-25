<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a 
                class="bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 text-center font-semibold focus:outline-none" 
                href="/projects/create">Create New Project
            </a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-6">
                <ul>
                    @forelse ($projects as $project)
                        <li><a href="{{ $project->path() }}">{{ $project->title }}</a></li>
                    @empty
                        <li>No Projects Yet</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>