<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
}
