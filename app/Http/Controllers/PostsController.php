<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postsController extends Controller
{
    public function postsPage(){
        return view('postsPage');
    }

    public function showCreateForm(){
        return view('user.createPosts');
    }
}
