<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard(){
        return view('user.dashboard');
    }

  

    public function profilePage(){
        return view('profile');
    }
    


}
