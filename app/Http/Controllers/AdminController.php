<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
    	$data = \DB::table('news')->get()->all();
		return view('adminHome', compact('data'));
    }

    public function show($id){
    	
		 $news = \DB::table('news')->find($id);
		 return view('show', compact('news'));
		 
    }

    public function store(Request $request){
    	
        $description = $request['description'];

        $description->save();

		return back();
    }
}
