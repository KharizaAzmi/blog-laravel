<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Khariza",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat perspiciatis error aperiam quisquam at eius accusantium aliquam excepturi. Illum ut minima soluta adipisci suscipit eos iste quod doloribus optio quam."
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Azmi",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat perspiciatis error aperiam quisquam at eius accusantium aliquam excepturi. Illum ut minima soluta adipisci suscipit eos iste quod doloribus optio quam."
        ],
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