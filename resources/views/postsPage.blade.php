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
                    {{ __("Posts") }}
                </div>
            </div>
        </div>
    </div>

    
    {{-- <div class="table-container py-6">
      <table class="table bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <thead>
              <tr>
                  <th scope="col" style=" color:#1A1A1D; text-align:center;">Title</th>
                  <th scope="col" style=" color:#1A1A1D; text-align:center;">Author</th>
                  
              </tr>
          </thead>
          <tbody>
              @foreach($posts as $value)
                  <tr>
                      <td style="text-align:center;">{{ $value->id }}</td>
                      <td style="text-align:center;">{{ $value->name }}</td>
                      <td style="text-align:center;">{{ $value->email }}</td>
                      @if($value->role == 'admin')
                          <td style="text-align:center; color:#4E9F3D">{{ $value->role }}</td>
                      @else
                          <td style="text-align:center; color:black ">{{ $value->role }}</td>
                      @endif
                      
                      <td style="text-align:center;">
                          <div class="d-flex justify-content-center">
                              <a href="{{ route('admin.edit',$value->id) }}">
                                  <button type="button" class="btn btn-warning shadow-lg bi bi-pen">EDIT</button>
                              </a>
                              
                              <form class="d-inline" action="{{ route('admin.destroy', $value->id) }}" method="POST" >
                                  @csrf
                                  @method('DELETE')   
                                  @if($value->role != 'admin' )
                                      <button class="btn btn-danger shadow-lg bi bi-trash" type="submit">DELETE</button>
                                  @else
                                      <button class="btn btn-danger shadow-lg bi bi-trash" type="submit" disabled>DELETE</button>
                                  @endif
                              </form>
                          </div>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>

      
    
    <div class="d-flex justify-content-center mt-4">
      {{ $posts->links('pagination::bootstrap-5') }}
  </div>
                 --}}


</x-app-layout>


{{-- <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer> --}}


    