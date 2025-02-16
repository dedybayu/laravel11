<?php
namespace App\Models;

use Illuminate\Support\Arr;


class Post{
    public static function all(){
        return [[
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
        ]];
    }

    public static function find($slug): array  { 
        
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if (!$post) {
            abort(404);
        } else {
            return $post;
        }

        // return Arr::first(static::all(), function($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });
    }
}