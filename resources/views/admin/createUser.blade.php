<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Add User") }}
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
                        {{ __('Profile Information') }}
                    </h2>
            
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __("Add a user.") }}
                    </p>
                </header>
                <br>
                <div>
                    
                    <x-input-label for="name" value='Name'/>
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"  required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                  
                </div>
                <br>
                <div>
                    <x-input-label for="email" value='Email'/>
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"  required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
                <br>
                <div>
                    <x-input-label for="password" value='Password' />
                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"  required autofocus autocomplete="name" />
                </div>
        
                
            </div>
            
         
            
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <x-input-label for="role" value='Role' />
                <select name="role" class="form-control" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                 
            </div>
                
            
            <div class="p-6">
               
                    <button type="submit" class="btn btn-primary shadow-lg; bi bi-pen">Add User</button>
                
            </div>
        </div>
    </form>
    




      
 

</x-app-layout>