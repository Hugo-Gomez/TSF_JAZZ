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





/* DATABASE DEV
*
*
*
*/
Route::get('fetch_events', function () {
    $html = file_get_contents('http://www.tsfjazz.com/web_service/agenda.php?days=20');
    $xml = simplexml_load_string($html, null, LIBXML_NOCDATA);

    foreach($xml->Agenda as $agenda){

        if (!DB::table('agenda')->where('id',(string)$agenda->id)->value('title')){

            foreach($agenda->children() as $key => $value){
                if ( !in_array($key, array('mail','picture'), true ))
                    $array[$key] = (string)$value;
            }

            $explode = explode("/", $array['date']);
            $day   = $explode[0];
            $month = $explode[1];
            $year  = $explode[2];

            if (strlen($month) == 1)
                $month = '0'.$month;

            $date = new DateTime($day.'-'.$month.'-'.$year);
            $array['date'] = $date->format('Y-m-d');
            $array['display'] = $array['une'];
            $array['zipcode'] = $array['zip'];
            unset($array['une']);
            unset($array['zip']);

            DB::table('agenda')->insert([$array]);
            $array = null;
        }
    }
    return "done";
});

Route::get('contact', function () {
    return view('contact');
});



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