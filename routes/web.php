<?php

use Illuminate\Support\Facades\Route;

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
        'judul' => 'Home',
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'judul' => 'About',
        'name' => 'Raymond',
        'email' => 'raymond329d@gmail.com',
        'image' => 'spidy.jpg'
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            'tittle' => 'judul pertama',
            'slug' => 'judul-pertama',
            'author' => 'Kaizen',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis accusamus fugit libero, ratione reprehenderit doloribus?'
        ],
        [
            'tittle' => 'judul kedua',
            'slug' => 'judul-kedua',
            'author' => 'Putra',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores magnam veniam quisquam, accusamus iste reiciendis accusantium ex sit, animi delectus rem hic cumque officia! Quibusdam.'
        ],
        [
            'tittle' => 'judul ketiga',
            'slug' => 'judul-ketiga',
            'author' => 'Feren',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod sequi consequuntur laborum optio! Doloremque consequatur illo fugiat ipsam enim aspernatur, suscipit error quae maxime sit velit laboriosam reiciendis a tenetur!'
        ]
    ];

    return view('posts', [
        'judul' => 'Posts',
        'posts' => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            'tittle' => 'judul pertama',
            'slug' => 'judul-pertama',
            'author' => 'Kaizen',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis accusamus fugit libero, ratione reprehenderit doloribus?'
        ],
        [
            'tittle' => 'judul kedua',
            'slug' => 'judul-kedua',
            'author' => 'Putra',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores magnam veniam quisquam, accusamus iste reiciendis accusantium ex sit, animi delectus rem hic cumque officia! Quibusdam.'
        ],
        [
            'tittle' => 'judul ketiga',
            'slug' => 'judul-ketiga',
            'author' => 'Feren',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod sequi consequuntur laborum optio! Doloremque consequatur illo fugiat ipsam enim aspernatur, suscipit error quae maxime sit velit laboriosam reiciendis a tenetur!'
        ]
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'judul' => 'Single Post',
        'post' => $new_post
    ]);
});
