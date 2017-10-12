<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
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

    public function storePodcast(Request $request){

        $podcastInputs['title'] = Input::get('title');

        $podcastInputs['description'] = Input::get('description');

        if(Input::hasFile('img_file')) {
        $file = Input::file('img_file');
        //$file->move(public_path(). '/storage', $file->getClientOriginalName())->save();
        $imagePath = $request->file('img_file')->store('public');
        $podcastInputs['thumbnail'] = $imagePath;
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

    public function showPodcast($id){
        
         $podcast = \DB::table('podcast')->find($id);
         return view('podcast/updatePodcast', compact('podcast'));
         
    }

    public function updatePodcast(Request $request, $id){

        //$Podcast = \DB::table('Podcast')->where('id', '=', $id);
        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        \DB::table('podcast')
                ->where('id', '=', $id)
                ->update($inputs);


        return redirect('/podcast/admin');
    }

    public function homeBlog()
    {
    
        $data_blogs = \DB::table('blog')->orderBy('id', 'DESC')->get()->all();
        return view('blog/blogHome', compact('data_blogs'));
    } 

    public function storeBlog(Request $request){

        $blogInputs['author'] = Input::get('author');

        $blogInputs['description'] = Input::get('description');

        if(Input::hasFile('img_file')) {
        $file = Input::file('img_file');
        //$file->move(public_path(). '/storage', $file->getClientOriginalName())->save();
        $imagePath = $request->file('img_file')->store('public');
        $podcastInputs['thumbnail'] = $imagePath;
        }

        \DB::table('blog')->insert($blogInputs);

        return redirect('/blog/admin');
    }

    public function destroyBlog($id){
        
         $data_blogs = \DB::table('blog')->where('id', '=', $id);

         if (!is_null($data_blogs)) {
            $data_blogs->delete();
        }
         

         return redirect('/blog/admin');
         
    }

    public function showBlog($id){
        
         $blog = \DB::table('blog')->find($id);
         return view('blog/updateBlog', compact('blog'));
         
    }

    public function updateBlog(Request $request, $id){

        //$Podcast = \DB::table('Podcast')->where('id', '=', $id);
        $inputs['author'] = Input::get('author');

        $inputs['description'] = Input::get('description');

        \DB::table('blog')
                ->where('id', '=', $id)
                ->update($inputs);


        return redirect('/blog/admin');
    }

}

