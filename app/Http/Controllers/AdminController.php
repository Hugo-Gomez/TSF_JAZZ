<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Carbon;
use Storage;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

/*  News variables */
        $this->newsInputs['title'] = Input::get('titleNews');
        $this->newsInputs['description'] = Input::get('descriptionNews');
        $this->newsInputs['date'] = Carbon\Carbon::now();

/*  Podcast variables */
        $this->podcastInputs['title'] = Input::get('titlePodcast');
        $this->podcastInputs['description'] = Input::get('descriptionPodcast');

       

/*  Blog variables */
        $this->blogInputs['author'] = Input::get('authorBlog');
        $this->blogInputs['description'] = Input::get('descriptionBlog');
        $this->blogInputs['link'] = Input::get('linkBlog');

/*  Program variables */
        $this->programInputs['title'] = Input::get('titleProgram');
        $this->programInputs['subtitle'] = Input::get('subtitleProgram');
        $this->programInputs['hebdo_date'] = Carbon\Carbon::now();
        $this->programInputs['description'] = Input::get('descriptionProgram');

/*  Agenda variables */
        $this->agendaInputs['title'] = Input::get('title');
        $this->agendaInputs['time'] = Input::get('time');
        $this->agendaInputs['date'] = Carbon\Carbon::now();
        $this->agendaInputs['artist'] = Input::get('artist');
        $this->agendaInputs['info'] = Input::get('info');
        $this->agendaInputs['club'] = Input::get('club');
        $this->agendaInputs['address'] = Input::get('address');
        $this->agendaInputs['town'] = Input::get('town');
        $this->agendaInputs['zipcode'] = Input::get('zipcode');
        $this->agendaInputs['telephone'] = Input::get('telephone');

    }

    /*  News section */
    public function home(){

        return view('home');
    }

    public function show($id){
        
         $news = \DB::table('news')->find($id);
         return view('show', compact('news'));
         
    }

    public function store(){

        \DB::table('news')->insert($this->newsInputs);

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

        \DB::table('news')
                ->where('id', '=', $id)
                ->update($this->newsInputs);


        return redirect('/home');
    }

    /*  Podcast section */
    public function homePodcast()
    {
    
        $data_podcasts = \DB::table('podcast')->orderBy('id', 'DESC')->get()->all();
        return view('podcast/podcastHome', compact('data_podcasts'));
    } 

    public function storePodcast(Request $request){

        if(Input::hasFile('img_podcast')) {
            //$imagePath = $request->file('img_podcast')->store('public/img/podcast');
            $file_content = $request->file('img_podcast');
            $imagePath = Storage::disk('public')->put('blog', $file_content);
            $this->podcastInputs['thumbnail'] = $imagePath;
        } 
        \DB::table('podcast')->insert($this->podcastInputs);

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

        \DB::table('podcast')
                ->where('id', '=', $id)
                ->update($this->podcastInputs);


        return redirect('/podcast/admin');
    }

    /*  Blog section */
    public function homeBlog()
    {
    
        $data_blogs = \DB::table('blog')->orderBy('id', 'DESC')->get()->all();
        return view('blog/blogHome', compact('data_blogs'));
    } 

    public function storeBlog(Request $request){

        if(Input::hasFile('img_file')) {
            $file_content = $request->file('img_file');
            $imagePath = Storage::disk('public')->put('blog', $file_content);
            $this->blogInputs['thumbnail'] = $imagePath;
        }

        \DB::table('blog')->insert($this->blogInputs);

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

        \DB::table('blog')
                ->where('id', '=', $id)
                ->update($this->blogInputs);


        return redirect('/blog/admin');
    }

    /*  Program section */
    public function homeProgram()
    {
    
        $data_programs = \DB::table('program')->orderBy('id', 'DESC')->get()->all();
        return view('program/programHome', compact('data_programs'));
    } 

    public function storeProgram(Request $request){

        if(Input::hasFile('img_program')) {
            //$imagePath = $request->file('img_program')->store('public/img/program');
            $file_content = $request->file('img_program');
            $imagePath = Storage::disk('public')->put('blog', $file_content);            
            $this->programInputs['thumbnail'] = $imagePath;
        }
        \DB::table('program')->insert($this->programInputs);

        return redirect('/program/admin');
    }

    public function destroyProgram($id){
        
         $data_programs = \DB::table('program')->where('id', '=', $id);

         if (!is_null($data_programs)) {
            $data_programs->delete();
        }
         

         return redirect('/program/admin');
         
    }

    public function showProgram($id){
        
         $program = \DB::table('program')->find($id);
         return view('program/updateProgram', compact('program'));
         
    }

    public function updateProgram(Request $request, $id){

        \DB::table('program')
                ->where('id', '=', $id)
                ->update($this->programInputs);


        return redirect('/program/admin');
    }


    /*  Agenda section */
    public function homeAgenda()
    {
    
        $data_agendas = \DB::table('agenda')->orderBy('id', 'DESC')->get()->all();
        return view('agenda/agendaHome', compact('data_agendas'));
    } 

       
    public function storeAgenda(Request $request){

        \DB::table('agenda')->insert($this->agendaInputs);

        return redirect('/agenda/admin');
    }

    public function destroyAgenda($id){
        
         $data_agendas = \DB::table('agenda')->where('id', '=', $id);

         if (!is_null($data_agendas)) {
            $data_agendas->delete();
        }
         

         return redirect('/agenda/admin');
         
    }

    public function showAgenda($id){
        
         $agenda = \DB::table('agenda')->find($id);
         return view('agenda/updateagenda', compact('agenda'));
         
    }

    public function updateAgenda(Request $request, $id){

        \DB::table('agenda')
                ->where('id', '=', $id)
                ->update($this->agendaInputs);


        return redirect('/agenda/admin');
    }

    /*. Newsletter */
    public function homeNewsletter(){
    
        $data_newsletters = \DB::table('newsletter')->orderBy('id', 'DESC')->get()->all();
        return view('contacts/newsletter', compact('data_newsletters'));
    }

    public function homeContact(){
    
        $data_contacts = \DB::table('contacts')->orderBy('id', 'DESC')->get()->all();
        return view('contacts/contact', compact('data_contacts'));
    }
}

