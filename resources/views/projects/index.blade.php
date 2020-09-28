<x-app-layout>

<div class="flex flex-wrap">
    @forelse ($projects as $project)
        <div class="w-full md:w-1/2 lg:w-1/4 px-3 pb-6">
            <div class="card">
                <div>
                    <h3 class="text-lg font-bold mb-4 border-solid border-l-4 border-themeAccent -ml-5 pl-4"><a href="{{ $project->path() }}">{{ $project->title }}</a></h3>
                    <div class="text-sm text-theme2">
                        {{ Illuminate\Support\Str::limit($project->description, 100) }}
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div>No Projects Yet</div>
    @endforelse
</div>

</x-app-layout>