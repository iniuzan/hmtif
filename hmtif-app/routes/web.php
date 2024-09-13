<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home', ['title' => 'WEBSITE RESMI HIMPUNAN MAHASISWA TEKNIK INFORMATIKA UNIVERSITAS PASUNDAN BANDUNG']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About HMTIF', 'Author' => 'Divisi KOMINFO HMTIF - UNPAS 2024/2025 Kabinet Harmoni']);
});

Route::get('/posts', function () {

    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Kenali Divisi kami yuk!', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact US!']);
});
