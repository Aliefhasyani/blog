<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



<style>
    .table-container {
        display: flex;
        justify-content: center;
    }
    .table {
        width: 87% !important; 
    }
    .heading-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>


<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 heading-container">
                    <span>{{ __("Create a post! ") }}</span>
                    <a href="{{ route('admin.store') }}">
                    <button type="button" class="btn btn-primary overflow-hidden shadow-sm sm:rounded-lg; bi bi-pen-fill">Add a post</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
