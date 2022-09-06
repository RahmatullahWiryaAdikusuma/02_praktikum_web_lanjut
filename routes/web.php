<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('posts', [PostController::class, 'index']);

Route::get('/', function () {   
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "06.2020.1.07349, Rahmatullah Wirya Adikusuma. Web B";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel dengan ID" . $id;
});