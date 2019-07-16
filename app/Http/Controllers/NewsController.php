<?php

namespace App\Http\Controllers;


// use App\contact;
use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __news()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        echo 'home';
        return view('news.news');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function news()
    {
        //echo 'home menu masud';
        return view('news.news');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    { 
        //echo 'home menu masud';
        $data = $request->input();
        // print "<pre>";
        // print_r($data);
        // die;
        DB::table('news')->insert($data);

        // $contact = new contact();
        // $contact->name = $request->name;
        // $contact->Email = $contact->Email;
        // $contact->Phone = $contact->Phone;
        // $contact->Message = $contact->Message;
        // $contact->save();

        // return redirect('contact');
      
        // print '<pre>';
        // print_r($data);
        // dd($request->all());
        
    }
}
