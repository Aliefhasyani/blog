<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>

    .table-container{
        display: flex;
        justify-content: center;
    }
    .table{
        width: 87% !important; 
    }
</style>
<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Users Management") }}
                </div>
            </div>
        </div>
    </div>

    <div class="table-container py-6">
        <table class="table bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th> 
                <th scope="col">Role</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $value)
                <tr>
                    <th scope="row">{{ $value->id }}</th> <!-- Fixed the typo here -->
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->role }}</td>
                </tr>
            @endforeach
           
            </tbody>
        </table>
    </div>

</x-app-layout>
