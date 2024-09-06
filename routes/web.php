<?php

use App\Models\Book;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});


Route::get('/about', function () {
    return view('about', [
        'name' => 'Aizan Syalim',
        'title' => 'About Page'
    ]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page','posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post){

    // $post = Post::find($id);

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function(User $user){

    return view('posts', [
        'title' => count($user->posts) .' Articles by '. $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){

    return view('posts', [
        'title' => 'Articles in ' . $category->name,
        'posts' => $category->posts
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/books', function () {
    return view('books', ['title' => 'Books Page','books' => Book::all()]);
});
