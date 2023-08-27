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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () { // ホームページにきたら～
    return view('index'); // index.blade.php
});

Route::get('/welcome', function () { // http://www.****/welcome にアクセスがあった場合、
    return view('welcome'); // welcome.blade.phpを返す。
});

Route::get('/like', function () { // http://www.****/welcome にアクセスがあった場合、
    return view('like'); // welcome.blade.phpを返す
});

Route::get('/dislike', function () {
    return view('dislike'); // dislike.blade.php
});

Route::get('/birthday', function () {
    return view('birthday'); // birthday.blade.php
});
