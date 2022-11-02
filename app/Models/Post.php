<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "Judul-post-pertama",
        "author" => "Yusuf Wahyu Syahroni",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, alias? Nobis, neque! Vero nobis iure voluptatem aspernatur laboriosam, quibusdam veniam atque ab. Ad reprehenderit odit itaque enim molestiae fugit tenetur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "ucup",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, alias? Nobis, neque! Vero nobis iure voluptatem aspernatur laboriosam, quibusdam veniam atque ab. Ad reprehenderit odit itaque enim molestiae fugit tenetur."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
            return $posts->firstWhere('slug', $slug);
    }
}
