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

/* Routes normales */

Route::get('/', 'StructureController@welcome');

Route::get('program', 'StructureController@program');

Route::get('jazzenda', 'StructureController@jazzenda');

Route::get('podcast', 'StructureController@podcast');

Route::get('podcast{podcast_id}', 'StructureController@podcast_item');

// Route::get('search{usersearch}', 'StructureController@searchresult');

Route::get('jazzblog', 'StructureController@jazzblog');

Route::get('audtre', 'StructureController@audtre');

Route::get('trackhist', 'StructureController@trackhist');

Route::get('media', 'StructureController@media');

Route::get('about', 'StructureController@about');

Route::get('contact', 'StructureController@contact');

Route::get('frequences', 'StructureController@frequences');

Route::get('newsletter', 'StructureController@newsletter');


/* EXPERIMENTAL AJAX ROUTES */
Route::get('ajax-get-events',   "AjaxController@getAgendaEvents");
Route::get('ajax-fetch-events', "AjaxController@fetchEvents");


/* Routes admin */

Route::get('/admin', 'AdminController@home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'AdminController@store');
Route::get('/delete/{news}','AdminController@destroy');
Route::get('/admin/{news}', 'AdminController@show');
Route::post('/admin/{news}','AdminController@update');

/* podcast */

Route::get('/podcast/admin', 'AdminController@homePodcast');
Route::post('/podcast/admin', 'AdminController@storePodcast');
Route::get('/podcast/delete/{podcast}','AdminController@destroyPodcast');
Route::get('/podcast/admin/{podcast}', 'AdminController@showPodcast');
Route::post('/podcast/admin/{podcast}','AdminController@updatePodcast');

/* blog */

Route::get('/blog/admin', 'AdminController@homeBlog');
Route::post('/blog/admin', 'AdminController@storeBlog');
Route::get('/blog/delete/{blog}','AdminController@destroyBlog');
Route::get('/blog/admin/{blog}', 'AdminController@showBlog');
Route::post('/blog/admin/{blog}','AdminController@updateBlog');

/* End routes admin */
