<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Request;
use Carbon;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    
    public function homePodcast()
    {
    
        $data_podcasts = \DB::table('podcast')->orderBy('id', 'DESC')->get()->all();
        return view('podcast/podcastHome', compact('data_podcasts'));
    } 

    public function storePodcast(){

        $podcastInputs['title'] = Input::get('title');

        $podcastInputs['description'] = Input::get('description');

        if(Input::hasFile('img_file')) {
        $file = Input::file('img_file');
        //$file->move(public_path(). '/storage', $file->getClientOriginalName())->save();
        $podcastInputs['thumbnail'] = $file->getClientOriginalName();
        }

        \DB::table('podcast')->insert($podcastInputs);

        return redirect('/podcast/admin');
    }

    public function destroyPodcast($id){
        
         $data_podcasts = \DB::table('podcast')->where('id', '=', $id);

         if (!is_null($data_podcasts)) {
            $data_podcasts->delete();
        }
         

         return redirect('/podcast/admin');
         
    }
}

