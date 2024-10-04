<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'artikel-1',
                'title' => 'Artikel 1',
                'author' => 'Dadang',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ab accusamus consequuntur sunt error magnam dolor minima blanditiis vel molestias voluptate deserunt distinctio,
                sequi aut autem natus esse sapiente nihil quos.',
                
            ],
            [
                'id' => '2',
                'slug' => 'artikel-2',
                'title' => 'Artikel 2',
                'author' => 'Dudung',
                'body' => 'Lorem ipsum dolor jastin sit amet, consectetur adipisicing elit.
                Ab accusamus consequuntur sunt error magnam dolor minima blanditiis vel molestias voluptate deserunt distinctio,
                sequi aut autem natus esse sapiente nihil quos.',
                
            ]
            ];
    }
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Hal HOmE']);
})->middleware('auth');

// Route::get('/posts', function () {
//     return view('posts', ['title' => 'Hal Blog', 'posts'=> Post::all() ]);
// });

Route::get('/posts', [PostController::class, 'posts'])->name('posts')->middleware('auth');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/post/{id}', [PostController::class, 'post'])->name('post');
Route::post('/addpost', [PostController::class, 'addpost'])->name('addpost');
Route::post('/regist', [LoginController::class, 'regist'])->name('regist');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

// Route::get('/posts/{id}', function($id) {

//         // $filteredPosts = array_filter(Post::all(), function($post) use ($slug) {
//         //     return $post['slug'] == $slug;
//         // });
        
//         $post = Post::find($id);

//         return view('post', ['title' => 'Single Post', 'post' => $post]);

// });

Route::get('/about', function () {
    return view('about', ['title' => 'Hal about']);
})->middleware('auth');

Route::get('/contact', function () {
    return view('contact',  ['title' => 'Hal contact']);
})->middleware('auth');

Route::get('/create', function () {
    return view('create',  ['title' => 'Hal contact']);
});

Route::get('/articles/{article}/edit', [PostController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [PostController::class, 'update'])->name('articles.update');

Route::get('delete/{id}', [PostController::class, 'delete'])->name('delete');
Route::post('/logout', [PostController::class, 'logout'])->name('logout');

