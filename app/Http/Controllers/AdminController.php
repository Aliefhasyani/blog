<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function fetchData(){
        $users = User::all();
        

        return view('admin.usersManagement',compact('users'));
    }
    
    public function posts(){
        return view('admin.postsManagement');
    }

    public function create(){
            return view('admin.createUser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password   ::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        
        $users = User::all();

        // Auth::login($user);


        return view('admin.usersManagement',compact('users'));
    }
    
}
