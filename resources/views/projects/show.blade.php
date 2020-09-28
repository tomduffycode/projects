<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card">
                <h2 class="text-2xl font-bold">{{ $project->title }}</h2>
                <p class="mb-4">{{ $project->description }}</p>
                <a 
                    class="button hover:bg-blue-700 focus:outline-none" 
                    href="/projects">Go Back
                </a>
            </div>
        </div>
    </div>
</x-app-layout>