<?php

/*
 *
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

Route::get('test', function () {
    return "Test Page";
});

Route::get('blog', function () {
    return "Blog Page";
});

Route::get('shop', function () {
    return "Shop Page";
});

Route::get('shop2', function () {
    return "Shop 2 Page";
});