<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {



        $video = Video::find(1);
        $posts = Post::all();

        return view('articles',[
            'posts' => $posts,
            'video' => $video
        ]);
    }

    public function show($id) {
        // $post = Post::where('title','Corporis culpa ad deserunt dolor blanditiis.')->firstOrFail();
        // dd($post);
    
        $post = Post::findOrFail($id);

        return view('article', [
            'post' => $post,
        ]);
    }

    public function contact() {
        return view("contact");
    }

    public function create() {
        return view("form");
    }

    public function store(Request $request) {
       
        dd($request->routeIs("posts.store"));
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        dd("Post créé");
    }

    public function register()
    {
        $post = Post::find(11);
        $video = Video::find(1);

        $comment1 = new Comment(['content' => 'Mon premier commentaire']);
        $comment2 = new Comment(['content' => 'Mon deuxième commentaire']);


    
        $comment3 = new Comment(['content' => 'Mon troisième commentaire']);

        $video->comments()->save($comment3);

        $post->comments()->saveMany([$comment1,$comment2]);
    }
}
