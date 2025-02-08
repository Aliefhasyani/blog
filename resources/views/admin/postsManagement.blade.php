<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Posts Management") }}
                </div>
            </div>
        </div>
    </div>

    <div class="table-container py-6">
        <table class="table bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <thead>
                <tr>
                    <th scope="col" style=" color:#1A1A1D; text-align:center;">Title</th>
                   
                    <th scope="col" style=" color:#1A1A1D; text-align:center;">ACTION</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $value)
                    <tr>
                       
                        <td style="text-align:center;">{{ $value->title }}</td>
                       
                        
                        <td style="text-align:center;">
                            <div class="d-flex justify-content-center" style="gap:10px;">
                                <a href="{{ route('admin.edit',$value->id) }}">
                                    <button type="button" class="btn btn-primary shadow-lg bi bi-book"> Read Blog</button>
                                </a>
                                
                                <a href="{{ route('admin.edit',$value->id) }}">
                                    <button type="button" class="btn btn-danger shadow-lg bi bi-book"> Delete Blog</button>
                                </a>
                            
                                <a href="{{ route('admin.edit',$value->id) }} ">
                                    <button type="button" class="btn btn-warning shadow-lg bi bi-book"> Edit Blog</button>
                                </a>
                                
                            
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    
 
</x-app-layout>
{{ url()->previous() }}