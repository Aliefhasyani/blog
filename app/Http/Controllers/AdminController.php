<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function fetchData(): View{
        // $users = User::all();
        

        // return view('admin.usersManagement',compact('users'));
        
        $users = DB::table('users')->paginate(14); 
        
        return view('admin.usersManagement', ['users' => $users]);
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

    public function edit($id)
    {
        $users = User::find($id);
    
        if (!$users) {
            return redirect()->route('admin.users')->with('error', 'User not found.');
        }
    
        return view('admin.editUser', compact('users'));
    }
    
    

    public function update(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $role = $request->input('role');


    

        DB::table('users')
            ->where('id', '=', Auth::user()->id)
            ->update([
                'name' => $name,
                'email' => $email,
                'role' => $role
            ]);

            $users = User::paginate(14);

        return view('admin.usersManagement', compact('users'));
    }
    
    
 
    
    
}
