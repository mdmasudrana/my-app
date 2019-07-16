<?php

namespace App\Http\Controllers;


// use App\contact;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
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
        echo 'home menu';
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contactus()
    {
        //echo 'home menu masud';
        return view('contact.contactus');
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
        DB::table('contacts')->insert($data);

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
