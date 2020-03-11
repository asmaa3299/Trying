<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use phpDocumentor\Reflection\Types\This;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index' , 'show');
    }
    public function index(){
        $posts = Post::latest()->paginate(5);        
        return view('posts.index' , compact('posts'));
    }
    public function show($id){
        $post = Post::find($id);
        return view('posts.show' , compact('post'));
    }
    public function create(){
        return view('posts.create')->with('status','Your post is created');
    }
    public function edit($id){
        $post = Post::find($id);
        if(auth()->user()->id != $post->user_id){
            return redirect('/posts')->with('error' , 'You are not authorized to edit');
        }
        return view('posts.edit' , compact('post'));
    }
    public function update($id){
        $this->validate(request(),[
            'title' => 'required | max:10',
            'body' => 'required | min:10'
        ]);
        $post = Post::find($id);
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        return redirect('/posts')->with('status','Your post is updated');
    }
    public function store(Request $request){
        $this->validate(request(),[
            'title' => 'required | max:10',
            'body' => 'required | min:10' 
        ]);
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
        $post->save();
        return redirect('/posts')->with('status','post was created!');
    }
    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('status','Your post is deleted');
    }
    
   
}