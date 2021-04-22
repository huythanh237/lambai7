<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\DemoController;
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
    // One to many
//    $user = User::with('posts')->findOrFail(4);
//    dd($user->toArray());

//    $post = Post::with('user')->findOrFail(1);
//    dd($post->toArray());

// Tao 1 ban post
//    $user = User::with('posts')->findOrFail(4);
//    $user->posts()->create([
//        'slug' => 'slug1',
//        'title' => 'title1',
//        'content' => 'content1',
//    ]);
// Tao nhieu bai post
//    $user = User::with('posts')->findOrFail(4); _
//    $user->posts()->createMany([
//        [
//        'slug' => 'slug2',
//        'title' => 'title2',
//        'content' => 'content2',
//    ],
//    [
//        'slug' => 'slug3',
//        'title' => 'title3',
//        'content' => 'content3',
//    ]
//    ]);

// Sua bai viet co title2 va id=4
//    $user = User::with('posts')->findOrFail(4);
//    $user->posts()->where('title', 'title2')->update(['content' => 'content16']);

    // Many to many
// Hien thi
//    $post = Post::with('categories')->findOrFail('5');
//    dd($post->toArray());

//    $category = Category::with('posts')->findOrFail(2);
//    dd($category->toArray());
//Them
//    $post = Post::with( 'categories')->findOrFail(5);
//    $post->categories()->attach([1]);
//Bo ket noi
//    $post = Post::with( 'categories')->findOrFail(5);
//    $post->categories()->detach([1]);

    return view('welcome');
});

Route::resource('posts', DemoController::class);
