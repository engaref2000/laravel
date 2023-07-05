<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/user/{id}' , function($id){
    return $id;

})->where('id','[0-9]+');

Route::get('/task/{id}/{title}',function($id, $title){
 return $id .$title;
} )->wher(['id'=>'[0-9]+','title'=>'[A-Za-z]+']);
