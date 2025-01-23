<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class PostsController extends Controller
{
    public function create(){
        return view('user.createPosts');
    }
    
    
    public function store(Request $request){
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'email'], 

            
        ]);

        Posts::create([
            'title' => $request->title,
            'content' => $request->content,
          
        ]);

        
        $posts = Posts::paginate(14);
        return view('postsPage',compact('posts'));
    }
}
