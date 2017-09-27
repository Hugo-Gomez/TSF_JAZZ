<?php

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
	$jazzblog = DB::table('blog')->get();
    return view('welcome', compact('jazzblog'));
});

Route::get('program', function () {
    return view('program');
});

Route::get('jazzenda', function () {
    return view('jazzenda');
});

Route::get('podcast', function () {
    return view('podcast');
});

Route::get('jazzblog', function () {
    return view('jazzblog');
});

Route::get('audtre', function () {
    return view('audtre');
});

Route::get('trackhist', function () {
    return view('trackhist');
});

Route::get('media', function () {
    return view('media');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});