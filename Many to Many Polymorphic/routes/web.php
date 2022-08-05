<?php

use Illuminate\Support\Facades\Route;
use App\Models\Video;
use App\Models\Post;
use App\Models\Tag;


Route::get('tags',function(){
    $post = Post::find(1);
    $post->tags()->create([
        'title'=>'politics'
    ]);
});

Route::get('tags',function(){
    $video = Video::find(2);
    $video->tags()->create([
        'title'=>'culture'
    ]);
});

Route::get('tags',function(){
    $video = Video::find(2);
    $tags = Tag::find(4);
    $video->tags()->attach($tags);
});

Route::get('/posts', function(){
    $post = Post::create([
        'user_id' => 2,
        'title' => 'Post Two'
    ]);
    $post->comments()->create([
        'user_id'=>2,
        'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae, aperiam?'
    ]);
});

Route::get('/videos', function(){
    $video = Video::create([
        'user_id' => 2,
        'title' => 'video Two'
    ]);
    $video->comments()->create([
        'user_id'=>2,
        'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae, aperiam?'
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
