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
                    </a>
                </div>
            </div>
        </div>
    </div>




                

    
    
    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm mx-auto sm:rounded-lg" style="max-width: 1220px;">
            <div class="p-6 text-gray-900 dark:text-gray-100" >
                <header>
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('Create a Blog ') }}
                    </h2>
            
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __("Add a post.") }}
                    </p>
                </header>
                <br>
                <div>
                    
                    <x-input-label for="title" value=' Blog Title'/>
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"  required autofocus autocomplete="title" placeholder="Blog title goes here..."/>
                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                  
                </div>
                <br>
               
                <br>
                <div>
                    <x-input-label for="blog" value='Blog Content' />
                    <textarea name="comment" form="usrform" class="mt-1 block w-full" style="height: 1000px" placeholder="Blog content goes here..."></textarea>
                </div>
        
                
            </div>
            
         
            
           
                
            
            <div class="p-6">
                <a href="{{ url()->previous() }}"><button type="button" class="btn btn-dark bi bi-arrow-left">Back</button></a>
                <button type="submit" class="btn btn-primary shadow-lg; bi bi-person-add">Add User</button>
            
            </div>
        </div>
    </form>
                
                
                
    




      
 


    


                        


   
</x-app-layout>
