<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Post;
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
       
        $users = DB::table('users')->paginate(14); 
        
        return view('admin.usersManagement', ['users' => $users]);
    }   
    
    public function posts(){
        $posts = DB::table('posts')->paginate(14);

        return view('admin.postsManagement',['posts'=>$posts]);
   
    }

    public function viewPost($id){
        $posts = Post::findOrFail($id);
        
        return view('user.viewPost' ,compact('posts'));
    }

    public function create(){
        return view('admin.createUser');
    }

    

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 
            'password' => ['required', Rules\Password::defaults()],
            'role' => ['required', 'in:admin,user'], 
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        
        $users = User::paginate(14);
        return view('admin.usersManagement',compact('users'));
    }


    public function edit($id){
        $users = User::find($id);
        
        return view('admin.editUser', compact('users'));
    }
    
    

    public function update(Request $request, $id){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id], 
            'role' => ['required', 'in:admin,user'], 
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);
        
        $users = User::paginate(14);
        
        return view('admin.usersManagement',compact('users'));
    }


    public function destroy($id){
        $users = User::find($id);
        $users->delete(); 

        return redirect()->back();
    }
    
}
