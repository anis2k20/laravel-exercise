<?php

use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Comment;

Route::get('/', function () {

//    $users = User::all();
//    $phone = User::find(1)->phone;

    $posts = Post::all();

//    $comment = Post::find(2)->comments;

    $post = Comment::find(4)->post;

    return $post;
//
//    $user = Phone::find(1)->user;
//    return $user.'-'. $phone;
//    return view('index', compact('users'));
});
