<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'Judul-Artikel-1',
                'title' => 'Judul Artikel Pertama',
                'author' => 'Aizan Syalim',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est iusto corrupti dolorem adipisci ab dolor quaerat facilis laborum? Dignissimos quibusdam recusandae voluptates aliquid culpa temporibus omnis corporis ipsa, voluptate iste! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum qui, voluptatibus in obcaecati, amet nemo non nobis et voluptate quam molestias provident!'
            ],
            [
                'id' => '2',
                'slug' => 'Judul-Artikel-2',
                'title' => 'Judul Artikel Kedua',
                'author' => 'Hani Puspita',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est iusto corrupti dolorem adipisci ab dolor quaerat facilis laborum? Dignissimos quibusdam recusandae voluptates aliquid culpa temporibus omnis corporis ipsa, voluptate iste! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum qui, voluptatibus in obcaecati, amet nemo non nobis et voluptate quam molestias provident!'
            ]
        ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //  return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}