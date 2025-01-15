<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Profile Page") }}
                </div>
            </div>
        </div>
    </div>

    
    <form>
        @csrf
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm mx-auto sm:rounded-lg" style="max-width: 1220px;">
            <div class="p-6 text-gray-900 dark:text-gray-100" >
                <header>
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('Profile Information') }}
                    </h2>
                </header>
            
                    
                <br>
                <div>
                    
                    <x-input-label for="name" value='Name'/>
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"  required autofocus autocomplete="name" value='{{Auth::user()->name}}' disabled />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                  
                </div>
                <br>
                <div>
                    <x-input-label for="email" value='Email'/>
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"  required autocomplete="username" value='{{Auth::user()->email}}' disabled/>
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
                <br>
                <div>
                    <x-input-label for="email" value='Role'/>
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"  required autocomplete="username" value='{{Auth::user()->role}}' disabled/>
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
                
                
                
            </div>
            
         
     
                
            
            <div class="p-6">
                <a href="{{ url()->previous() }}"><button type="button" class="btn btn-dark bi bi-arrow-left">Back</button></a>
             
            </div>
        </div>
    </form>
</x-app-layout>
                
                
                
                
            
            