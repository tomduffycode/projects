<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create A Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">

                <form method="POST" action="/projects">
                    @csrf 
                    
                    <div class="field">
                        <label class="label" for="title">Title</label>

                        <div class="field">
                            <input type="text" class="appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500" name="title" placeholder="Project Title">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="description">Description</label>

                        <div class="control">
                            <textarea name="description" class="appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none">Create Project</button>
                            <a class="color-blue-600" href="/projects">Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>