<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;


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

Route::get('');

Route::get('/posts',[PostController::class,'index'])->name('post.index');
Route::get('/posts/create',[PostController::class,'create'])->name('post.create');
Route::post('/posts',[PostController::class,'store'])->name('post.store');
Route::get('/posts/{post}',[PostController::class,'show'])->name('post.show');
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('post.edit');
Route::patch('/posts/{post}',[PostController::class,'update'])->name('post.update');
Route::delete('posts/{post}',[PostController::class,'destroy'])->name('post.delete');

Route::get('books',[BookController::class,'index'])->name('book.index');


Route::get('/posts/update',[PostController::class,'update']);
Route::get('/posts/delete',[PostController::class,'delete']);



Route::get('/main',[MainController::class,'index'])->name('main.index');
Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
