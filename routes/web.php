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

Route::get('/news{news_id}', 'StructureController@news');

Route::get('program', 'StructureController@program');

Route::get('program{program_id}', 'StructureController@program_item');

Route::get('jazzenda', 'StructureController@jazzenda');

Route::get('podcast', 'StructureController@podcast');

Route::get('podcast{podcast_id}', 'StructureController@podcast_item');

Route::get('jazzblog', 'StructureController@jazzblog');

Route::get('audtre', 'StructureController@audtre');

Route::get('trackhist', 'StructureController@trackhist');

Route::get('media', 'StructureController@media');

Route::get('about', 'StructureController@about');

Route::get('contact', 'StructureController@contact');
Route::post('/contact', 'StructureController@storeContact');

Route::get('frequences', 'StructureController@frequences');

Route::get('membership', 'StructureController@membership');
Route::post('/membership', 'StructureController@storeMembership');

Route::get('searchResult', 'StructureController@search');

Route::get('legalnotices', 'StructureController@legalnotices');


/* EXPERIMENTAL AJAX ROUTES */
Route::get('ajax-get-events',   "AjaxController@getAgendaEvents");
Route::get('ajax-fetch-events', "AjaxController@fetchEvents");


/* Routes admin */

Route::get('/admin', 'AdminController@home');



Auth::routes();
/* News */

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

/* program */

Route::get('/program/admin', 'AdminController@homeProgram');
Route::post('/program/admin', 'AdminController@storeProgram');
Route::get('/program/delete/{program}','AdminController@destroyProgram');
Route::get('/program/admin/{program}', 'AdminController@showProgram');
Route::post('/program/admin/{program}','AdminController@updateProgram');

/* Agenda */

Route::get('/agenda/admin', 'AdminController@homeAgenda');
Route::post('/agenda/admin', 'AdminController@storeAgenda');
Route::get('/agenda/delete/{agenda}','AdminController@destroyAgenda');
Route::get('/agenda/admin/{agenda}', 'AdminController@showAgenda');
Route::post('/agenda/admin/{agenda}','AdminController@updateAgenda');


/* newsletter, contact */

Route::get('/contact/admin', 'AdminController@homeContact');
Route::get('/newsletter/admin', 'AdminController@homeNewsletter');

/* Treasure */

Route::get('/treasure/admin', 'AdminController@homeTreasure');
Route::post('/treasure/admin', 'AdminController@storeTreasure');
Route::get('/treasure/delete/{treasure}','AdminController@destroyTreasure');
Route::get('/treasure/admin/{treasure}', 'AdminController@showTreasure');
Route::post('/treasure/admin/{treasure}','AdminController@updateTreasure');



/* End routes admin */
