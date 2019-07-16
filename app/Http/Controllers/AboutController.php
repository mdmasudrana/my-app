<?php

namespace App\Http\Controllers;


// use App\contact;
use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __about()
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
        return view('about.aboutus');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        //echo 'home menu masud';
        return view('about.aboutus');
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
        DB::table('about')->insert($data);

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
