<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});


Route::get('/about', function () {
    return '2341720247 TIARA MERA SIFA';
});

Route::get('/user/{Mera}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- '.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [WelcomeController::class,'hello']);
Route::get('/about', [WelcomeController::class,'hello']);
Route::get('/articles/', [WelcomeController::class,'hello']);
