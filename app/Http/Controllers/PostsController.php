<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class postsController extends Controller
{
    public function postsPage(){
        $posts = DB::table('posts')->paginate(14);

        return view('postsPage',['posts'=>$posts]);
    }

    public function create(){
        return view('user.createPosts');
    }

    public function store(Request $request){
        Post::create([
            'title' => $request->input('title'),
            'content' =>$request->input('content')
        ]);

        return view('user.createPosts');
    }

    public function viewPost($id){
        $posts = Post::findOrFail($id);
   
        
        return view('user.viewPost' ,compact('posts'));
    }
    
    
    public function destroy($id){
        $posts = Post::findOrFail($id);
        $posts->delete(); 

        return redirect()->back();
    }

    public function showPostHome(){
        $posts = Post:: all();

        return view('home',compact('posts'));
    }
}
