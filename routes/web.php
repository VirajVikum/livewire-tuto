<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\ShowPosts;
use App\Livewire\Todo;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',Todo::class);

Route::get('/counter',Counter::class);
Route::get('/posts',ShowPosts::class);
Route::get('/create-posts',CreatePost::class);