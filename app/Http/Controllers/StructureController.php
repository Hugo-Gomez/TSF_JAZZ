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
    	return view('program');
	}

	function jazzenda() {
    	return view('jazzenda');
	}

	function podcast() {
    	return view('podcast');
	}

	function jazzblog() {
		$blog = DB::table('blog')->get();
    	return view('jazzblog', compact('blog'));
	}

	function audtre() {
    	return view('audtre');
	}

	function trackhist() {
    	return view('trackhist');
	}

	function media() {
    	return view('media');
	}

	function about() {
    	return view('about');
	}

	function contact() {
    	return view('contact');
	}
}
