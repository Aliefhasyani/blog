<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                    <span>{{ __("Users Management") }}</span>
                    <button type="button" class="btn btn-primary overflow-hidden shadow-sm sm:rounded-lg">Add User</button>
                </div>
            </div>
        </div>
    </div>

    <div class="table-container py-6">
        <table class="table bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <thead>
                <tr>
                    <th scope="col" style="background-color: black; color:whitesmoke; text-align:center;">ID</th>
                    <th scope="col" style="background-color: black; color:whitesmoke; text-align:center;">USERNAME</th>
                    <th scope="col" style="background-color: black; color:whitesmoke; text-align:center;">EMAIL</th>
                    <th scope="col" style="background-color: black; color:whitesmoke; text-align:center;">ROLE</th>
                    <th scope="col" style="background-color: black; color:whitesmoke; text-align:center;">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $value)
                    <tr>
                        <td style="text-align:center;">{{ $value->id }}</td>
                        <td style="text-align:center;">{{ $value->name }}</td>
                        <td style="text-align:center;">{{ $value->email }}</td>
                        <td style="text-align:center;">{{ $value->role }}</td>
                        <td>
                            <a href="{{ route('homepage') }}"><button type="button" class="btn btn-warning">EDIT</button></a>
                            <a href="{{ route('homepage') }}"><button type="button" class="btn btn-danger">DELETE</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
