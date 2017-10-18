<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
	public static function getAgendaEvents() {
		$news = DB::table('news')->get();
		$agenda = DB::table('agenda')->get();
		foreach($agenda as $key => $value){
			$date = new \DateTime($value->date);
			$year = intval($date->format('Y'));
			$month = intval($date->format('m'));
			$day = intval($date->format('d'));
			$events[$year][$month][$day][] = $value;
		}
		$tmp = array();
		foreach($events as $year => $months){
			$tmp['years'][] = array(
				'int' => $year,
				'months' => array()
			);
			$current_year = key($tmp['years']);
			foreach($months as $month => $days){
				$tmp['years'][$current_year]['months'][] = array(
					'int' => $month,
					'days' => array()
				);
				$current_month = count($tmp['years'][$current_year]['months'])-1;
				foreach($days as $day => $e){
					$tmp['years'][$current_year]['months'][$current_month]['days'][] = array(
						'int' => $day,
						'events' => array()
					);
					$current_day = count($tmp['years'][$current_year]['months'][$current_month]['days'])-1;
					foreach($e as $event){

						$tmp['years'][$current_year]['months'][$current_month]['days'][$current_day]['events'][] = array(
							'startTime' => substr($event->time, -1) === ':' ? $event->time.'00' : $event->time,
							'endTime' => '',
							'mTime' => '',
							'text' => $event->title
						);
					}
				}
			}
		}
    	return json_encode($tmp);
    }
    
    public static function fetchEvents() {
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
	}
	
	public static function getLiveTrack() {
		$html = file_get_contents('http://www.tsfjazz.com/web_service/live.php');
		$xml = simplexml_load_string($html, null, LIBXML_NOCDATA);
		$live = $xml->Live->LiveTitle;
		$results = array(
			'artist' => (string)$live->artist,
			'title'  => (string)$live->title
		);

		return json_encode($results);
	}
}
