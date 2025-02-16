
<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Posts") }}
                </div>
            </div>
        </div>
        
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="margin-top:20px">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="p-6" style="text-align:center; font-size:25px"><span style="font-weight:bold">{{ $posts->title }}</span></h1>
                <p class="p-6 text-gray-900 dark:text-gray-100" style="text-align:center;">{{ $posts->content }}</p>
            </div>
        </div>
    </div>
 
</x-app-layout>