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

Route::get('/', 'StructureController@welcome');

Route::get('program', 'StructureController@program');

Route::get('jazzenda', 'StructureController@jazzenda');

Route::get('podcast', 'StructureController@podcast');

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
