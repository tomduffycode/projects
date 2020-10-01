<x-app-layout>
    <div class="flex flex-wrap">
        <div class="w-4/5">
            <div class="w-full bg-theme2 p-8 flex justify-between items-center">
                <div class="titleDescription w-7/8">
                    <h2 class="text-2xl text-white font-bold">{{ $project->title }}</h2>
                    <p class="text-gray-400 italic">{{ $project->description }}</p>
                    <span class="dueDate text-xs text-gray-400">Due: <span class="text-themeAccent">November 4th, 2020</span></span>
                    <span class="ml-4 owner text-xs text-gray-400">Owner: <span class="text-themeAccent"><a href="#">Tom Duffy</a></span></span>
                </div>
                <div class="flex text-white">
                    <img class="h-8 w-8 rounded-full object-cover mr-1" src="http://localhost:8000/storage/profile-photos/zrq2vyDHArf8hZkBV2PzOOVCD2IA5uNsGzS1Fbtx.jpeg">
                    <img class="h-8 w-8 rounded-full object-cover mr-1" src="http://localhost:8000/storage/profile-photos/zrq2vyDHArf8hZkBV2PzOOVCD2IA5uNsGzS1Fbtx.jpeg">
                    <img class="h-8 w-8 rounded-full object-cover mr-1" src="http://localhost:8000/storage/profile-photos/zrq2vyDHArf8hZkBV2PzOOVCD2IA5uNsGzS1Fbtx.jpeg">
                    <img class="h-8 w-8 rounded-full object-cover" src="http://localhost:8000/storage/profile-photos/zrq2vyDHArf8hZkBV2PzOOVCD2IA5uNsGzS1Fbtx.jpeg">
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