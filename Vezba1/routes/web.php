<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    $posts = DB::table('posts')->get();
    return view("posts", compact("posts"));
});



