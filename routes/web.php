<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadImgesController;
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
    return view('welcome');
});

Route::resource('posts',PostController::class);
Route::get('posts/restore/{id}',[PostController::class,'restore'])->name('posts.restore');
Route::get('posts/forcedelete/{id}',[PostController::class,'forcedelete'])->name('posts.forcedelete');
Route::get('posts/delete/all/trancate',[PostController::class,'deletealltrancate'])->name('posts.delete.all.trancate');
Route::post('store',[PostController::class,'store'])->name('store.photo');
//Route::get('show/image',[PostController::class,'indeximage']);
