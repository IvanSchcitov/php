<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
//        $posts = DB::table('posts')->get();
        return view('index', compact('posts'));
    }

    public function show($id){
        $post = Post::find($id);
//        $post = DB::table('posts')->find($id);
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
//        $post = new Post;
//        $post->title = request('title');
//        $post->alias = request('alias');
//        $post->intro = request('intro');
//        $post->body = request('body');
//        $post->save();
        $this->validate(request(),[
            'title' => 'required',
            'alias' => 'required',
            'intro' => 'required',
            'body' => 'required'
        ]);
        Post::create([
            'title' => request('title'),
            'alias' => request('alias'),
            'intro' => request('intro'),
            'body' => request('body')
        ]);
        return redirect('/');
    }

    public function edit(Post $post){

        return view('posts.edit',compact('post'));
    }

    public function update(Post $post){
        $this->validate(request(),[
            'title' => 'required',
            'alias' => 'required',
            'intro' => 'required',
            'body' => 'required'
        ]);
        $post->update(request(['title', 'alias', 'intro', 'body']));
        return redirect('/');
    }

    public function dest(Post $post){
        $post->delete();
        return redirect('/');
    }
}
