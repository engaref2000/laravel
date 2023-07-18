<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Postfile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

/*    $post = Post::all();
    ddd($post);*/

return view('posts' , ['posts'=>Post::all()]);

});

Route::get('/posts/{post}', function($slag){

return view('post' ,[ 'post'=>Post::find($slag)]);
});
