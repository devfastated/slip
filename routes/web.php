<?php

use App\Http\Controllers\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', [Welcome::class, 'Index'])->name('welcome');

Route::get('/new', [Welcome::class, 'new'])->name('new');

Route::get('/exit', [Welcome::class, 'exit'])->name('exit');

Route::get('/new/{id}', [Welcome::class, 'getID'])->name('getID');

Route::get('login', function () {
    return redirect()->route('welcome');
});

Route::get('/xxx', function () {
    return 'Hello';
})->name('hello');


Route::get('/hallo', function () {
    return redirect()->route('hello');
});

//Route parameters
Route::get('/posts/{id}', function ($id) {
    return 'post1 ' . $id;
})->name('posts.show');


Route::get('/recent-post/{days_ago?}', function ($days_ago = 0) {
    return 'Post From ' . $days_ago . ' days ago';
})->name('post.recent.index');


Route::fallback(function ($days_ago) {
    return 'No page found';
});

//GET
//POST
//PUT
//DELETE