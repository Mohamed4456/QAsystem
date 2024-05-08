<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;

use Illuminate\Http\Request;



class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');        
    }
 

    public function index()
    {
        $post=Post::all();
        return view('posts.index')->with('post',$post);
    }

   
    public function create()
    {
        return view('posts.create');
        
    }

    public function store(Request $request)
    { 
        $this->validate($request,[

            'title'=>'required',
            'description'=>'required',
        ]);

        $post=Post::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('post.index')
        ->with('success','post created success');

    }

    public function show($id)
    {
        $post=Post::find($id);
        $comments=Comment::all();

        return view('posts.show')->with('post',$post)
        ->with('comments',$comments);

    }

    public function destroy($id)
    {
        $post=Post::find($id)->delete();
        return redirect()->route('post.index')
        ->with('success','post Deleted success');

    }
    public function hdelete($id)
    {
        $post=Post::find($id)->delete();
        return redirect()->route('post.index')
        ->with('success','post Deleted success');

    }
}
