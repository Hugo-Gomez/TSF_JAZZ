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
