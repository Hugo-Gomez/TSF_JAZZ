<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Request;
use Carbon;

class AdminController extends Controller
{
    
    public function home(){
  //    $data = \DB::table('news')->get()->all();
        // return view('adminHome', compact('data'));

        return view('home');
    }

    public function show($id){
        
         $news = \DB::table('news')->find($id);
         return view('show', compact('news'));
         
    }

    public function store(){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['date'] = Carbon\Carbon::now();

        \DB::table('news')->insert($inputs);

        return redirect('/home');
    }

    public function destroy($id){
        
         $news = \DB::table('news')->where('id', '=', $id);

         if (!is_null($news)) {
            $news->delete();
        }
         

         return redirect('/home');
         
    }

    public function update(Request $request, $id){

        //$news = \DB::table('news')->where('id', '=', $id);
        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['date'] = Carbon\Carbon::now();

        \DB::table('news')
                ->where('id', '=', $id)
                ->update($inputs);


        return redirect('/home');
    }
}

