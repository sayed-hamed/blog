<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\front\HomeController;
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

Route::group(['prefix'=>'dash','namespace'=>'admin'],function (){

    Route::get('/cat/index',[CategoryController::class,'index'])->name('cat');
    Route::get('/cat/create',[CategoryController::class,'create'])->name('cat.create');
    Route::post('/cat/store',[CategoryController::class,'store'])->name('cat.store');
    Route::get('/cat/edit/{id}',[CategoryController::class,'edit'])->name('cat.edit');
    Route::post('/cat/update/{id}',[CategoryController::class,'update'])->name('cat.update');
    Route::get('/cat/delete/{id}',[CategoryController::class,'delete'])->name('cat.delete');


    Route::get('/post/index',[PostController::class,'index'])->name('posts');
    Route::get('/post/create',[PostController::class,'create'])->name('post.create');
    Route::post('/post/store',[PostController::class,'store'])->name('post.store');
    Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
    Route::post('/post/update/{id}',[PostController::class,'update'])->name('post.update');
    Route::get('/post/delete/{id}',[PostController::class,'delete'])->name('post.delete');

});


Route::group(['namespace'=>'front'],function (){
    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('/cat/post/{id}',[HomeController::class,'cat'])->name('cats');
    Route::get('/cat/p/{id}',[HomeController::class,'post'])->name('post');
});
