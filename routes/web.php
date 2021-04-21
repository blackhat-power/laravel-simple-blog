<?php

use App\Http\Controllers\TrialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikePostController;
use App\Http\Controllers\UploadFiles;



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
Route::get('/', function(){
  return view('home');
})->name('home');
Route::get('/logout',[LogoutController::class,'index'])->name('logout');
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);
Route::post('/posts/{jpm}/likes', [LikePostController::class, 'index'])->name('posts.likes');
Route::delete('/posts/{jpm}/likes', [LikePostController::class, 'destroy'])->name('posts.likes');
Route::get('/uploadFiles', [UploadFiles::class, 'index']
)->name('upload.index');
/*Route::post('/uploadFiles/{post}/profilepic', [UploadFiles::class, 'store']
)->name('upload.index');*/


