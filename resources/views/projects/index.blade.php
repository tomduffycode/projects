<x-app-layout>

<div class="flex">
    @forelse ($projects as $project)
        <div class="bg-white mr-4 p-5 rounded shadow w-1/3">
            <div>
                <h3 class="text-lg font-bold"><a href="{{ $project->path() }}">{{ $project->title }}</a></h3>
                <div class="text-sm">
                    {{ $project->description }}
                </div>
            </div>
        </div>
    @empty
        <div>No Projects Yet</div>
    @endforelse
</div>

</x-app-layout>