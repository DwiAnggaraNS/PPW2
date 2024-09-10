<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/postsArticle', [PostArticleController::class,'index']);

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

Route::get('/about', function () {
    return view('about', [
        'name' => 'Dwi Anggara Najwan Sugama',
        'email' => 'dwianggarans@gmail.com'
    ]);
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/posts', [PostController::class,'index']);
