<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => '1',
            'slug'=> 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Bayu',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, corrupti vero dolores
                        pariatur aut sunt veniam suscipit atque saepe quibusdam neque obcaecati veritatis enim alias. Eveniet nostrum
                        facere cumque itaque.'
        ],
        [
            'id' => '2',
            'slug'=> 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Aaaaa',
            'body' => 'psum dolor sit amet consectetur adipisicing elit. Corporis, corrupti vero dolores
                        pariatur aut sunt veniam suscipit atque saepe quibusdam neque obcaecati veritatis enim alias. Eveniet nostrum
                        facere cumque itaque.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug'=> 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Bayu',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, corrupti vero dolores
                        pariatur aut sunt veniam suscipit atque saepe quibusdam neque obcaecati veritatis enim alias. Eveniet nostrum
                        facere cumque itaque.'
        ],
        [
            'id' => '2',
            'slug'=> 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Aaaaa',
            'body' => 'psum dolor sit amet consectetur adipisicing elit. Corporis, corrupti vero dolores
                        pariatur aut sunt veniam suscipit atque saepe quibusdam neque obcaecati veritatis enim alias. Eveniet nostrum
                        facere cumque itaque.'
        ]
        ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Bayu Setiawan']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
