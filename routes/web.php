<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

// Route::get('/blog', function () {
//     // $blog_posts = [
//     //     [
//     //         "title" => "Judul Post Pertama",
//     //         "author" => "Khariza",
//     //         "slug" => "judul-post-pertama",
//     //         "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat perspiciatis error aperiam quisquam at eius accusantium aliquam excepturi. Illum ut minima soluta adipisci suscipit eos iste quod doloribus optio quam."
//     //     ],
//     //     [
//     //         "title" => "Judul Post Kedua",
//     //         "author" => "Azmi",
//     //         "slug" => "judul-post-kedua",
//     //         "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat perspiciatis error aperiam quisquam at eius accusantium aliquam excepturi. Illum ut minima soluta adipisci suscipit eos iste quod doloribus optio quam."
//     //     ],
//     // ];
//     return view('posts', [
//         "title" => "Posts",
//         "posts" => $blog_posts
//     ]);
// });

Route::get('/posts', [PostController::class, 'index']);

// Route::get('posts/{slug}', function($slug){
//     $blog_posts = [
//         [
//             "title" => "Judul Post Pertama",
//             "author" => "Khariza",
//             "slug" => "judul-post-pertama",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat perspiciatis error aperiam quisquam at eius accusantium aliquam excepturi. Illum ut minima soluta adipisci suscipit eos iste quod doloribus optio quam."
//         ],
//         [
//             "title" => "Judul Post Kedua",
//             "author" => "Azmi",
//             "slug" => "judul-post-kedua",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat perspiciatis error aperiam quisquam at eius accusantium aliquam excepturi. Illum ut minima soluta adipisci suscipit eos iste quod doloribus optio quam."
//         ],
//     ];

//     $new_post = [];
//     foreach($blog_posts as $post){
//         if($post["slug"] === $slug){
//             $new_post = $post;
//         }
//     }

//     return view('post', [
//         "title" => "Single Post",
//         "post" => $new_post
//     ]);
// });

Route:: get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);