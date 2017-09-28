<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StructureController extends Controller
{
    function welcome() {
		$news = DB::table('news')->get();
    	return view('welcome', compact('news'));
	}

	function program() {
    	$news = DB::table('news')->get();
    	return view('program', compact('news'));
	}

	function jazzenda() {
    	$news = DB::table('news')->get();
    	return view('jazzenda', compact('news'));
	}

	function podcast() {
    	$news = DB::table('news')->get();
		$podcasts = DB::table('podcast')->get();
    	return view('podcast', compact('podcasts'), compact('news'));
	}

	function jazzblog() {
    	$news = DB::table('news')->get();
		$blog = DB::table('blog')->get();
    	return view('jazzblog', compact('blog'), compact('news'));
	}

	function audtre() {
    	$news = DB::table('news')->get();
    	return view('audtre', compact('news'));
	}

	function trackhist() {
    	$news = DB::table('news')->get();
    	return view('trackhist', compact('news'));
	}

	function media() {
    	$news = DB::table('news')->get();
    	return view('media', compact('news'));
	}

	function about() {
    	$news = DB::table('news')->get();
    	return view('about');
	}

	function contact() {
    	$news = DB::table('news')->get();
    	return view('contact', compact('news'));
	}

  function frequences() {
    	$news = DB::table('news')->get();
    	return view('frequences', compact('news'));
	}

  function newsletter() {
    	$news = DB::table('news')->get();
    	return view('newsletter', compact('news'));
	}
}
