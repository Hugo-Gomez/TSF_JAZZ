<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Request as DBRequest;

class StructureController extends Controller
{
    function welcome() {
		$news = DB::table('news')->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
    	return view('welcome', compact('news', 'podcasts', 'podcast_items'));
	}

	function program() {
    	$news = DB::table('news')->get();
        $programs = DB::table("program")->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
    	return view('program', compact('news', 'programs', 'podcasts', 'podcast_items'));
	}

    function program_item($program_id) {
        $news = DB::table('news')->get();
        $programs = DB::table('program')->get()->where('id_program', $program_id);
        $program_items = DB::table('program_item')->get()->where('id_program', $program_id);
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
        return view('program_item', compact('news', 'programs', 'program_items', 'podcasts', 'podcast_items'));
    }

	function jazzenda() {
    	$news = DB::table('news')->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
    	return view('jazzenda', compact('news', 'podcasts', 'podcast_items'));
	}

	function podcast() {
    	$news = DB::table('news')->get();
		$podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
    	return view('podcast', compact('podcasts', 'news', 'podcast_items'));
	}

    function podcast_item($podcast_id) {
        $news = DB::table('news')->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
        $podcasts_hugo = DB::table('podcast')->get()->where('id', $podcast_id);
        $podcast_items_hugo = DB::table('podcast_item')->get()->where('id_podcast', $podcast_id);
        return view('podcast_item', compact('news', 'podcast_items_hugo', 'podcasts_hugo', 'podcasts', 'podcast_items'));
    }

	function jazzblog() {
    	$news = DB::table('news')->get();
		$blog = DB::table('blog')->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
    	return view('jazzblog', compact('blog'), compact('news', 'podcasts', 'podcast_items'));
	}

	function audtre() {
    	$news = DB::table('news')->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
    	return view('audtre', compact('news', 'podcasts', 'podcast_items'));
	}

	function trackhist() {
    	$news = DB::table('news')->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
    	return view('trackhist', compact('news', 'podcasts', 'podcast_items'));
	}

	function media() {
    	$news = DB::table('news')->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
    	return view('media', compact('news', 'podcasts', 'podcast_items'));
	}

	function about() {
    	$news = DB::table('news')->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
    	return view('about', compact('news', 'podcasts', 'podcast_items'));
	}

    function contact() {
    	$news = DB::table('news')->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
    	return view('contact', compact('news', 'podcasts', 'podcast_items'));
	}

    function frequences() {
    	$news = DB::table('news')->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
    	return view('frequences', compact('news', 'podcasts', 'podcast_items'));
	}

    function newsletter() {
    	$news = DB::table('news')->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
    	return view('newsletter', compact('news', 'podcasts', 'podcast_items'));
	}

    function search() {
        $news = DB::table('news')->get();
        $podcasts = DB::table('podcast')->get();
        $podcast_items = DB::table('podcast_item')->get();
        $keyword = DBRequest::get('keyword');
        if ($keyword!='') {
            $queryAgenda = DB::table('agenda')->where("title", "LIKE", "%$keyword%")
                ->orwhere("artist", "LIKE", "%$keyword%")
                    ->get();
            $queryBlog = DB::table('blog')->where("author", "LIKE", "%$keyword%")
                    ->get();
            $queryNews = DB::table('news')->where("title", "LIKE", "%$keyword%")
                    ->get();
            $queryPodcast_item = DB::table('podcast_item')->where("title", "LIKE", "%$keyword%")
                ->orwhere("author", "LIKE", "%$keyword%")
                    ->get();
            $queryProgram_item = DB::table('program_item')->where("title", "LIKE", "%$keyword%")
                ->orwhere("subtitle", "LIKE", "%$keyword%")
                    ->get();
        }
        else {
            return view('searchResult', compact('news', 'podcasts', 'podcast_items'));
            die();
        }
        return view('searchResult', compact('queryAgenda', 'queryBlog', 'queryNews', 'queryPodcast_item', 'queryProgram_item', 'news', 'podcasts', 'podcast_items'));
    }
}
