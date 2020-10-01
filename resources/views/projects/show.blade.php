<x-app-layout>
    <div class="flex flex-wrap">
        <div class="w-4/5">
            <div class="w-full bg-theme2 p-8 flex justify-content-between align-items-center">
                <div class="titleDescription w-4/5">
                    <h2 class="text-2xl text-white font-bold">{{ $project->title }}</h2>
                    <p class="mb-4 text-gray-400 italic">{{ $project->description }}</p>
                </div>
                <div class="members text-white">
                    This will show all members of the project
                </div>
            </div>
            <div class="tasks">
                <div class="card m-4">
                    Task 1
                </div>
                <div class="card mx-4">
                    Task 2
                </div>
            </div>
        </div>
        <div class="h-screen w-1/5 border-l border-themeAccent bg-theme2 p-2">
            <h3 class="text-lg font-bold text-themeAccent mt-4 text-align-center">Recent Activity</h3>
        </div>
    </div>
</x-app-layout>