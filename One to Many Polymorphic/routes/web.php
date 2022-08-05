<?php

use Illuminate\Support\Facades\Route;
use App\Models\Comment;
use App\Models\Video;
use App\Models\Post;

Route::get('/', function () {
    // For Video
    $video = Video::first();
    return $video->comments;

    $video = Video::get();
    dd($video[0]->comments);

    // For Post
    $post = Post::first();
    return $post->comments;    

    $post  = Post::find(2);
    return $post->comments;

    $post = Post::get();
    dd($post[0]->comment);

    // For Comment
    $comment = Comment::find(3);
    return $comment->commentable;        
    
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
