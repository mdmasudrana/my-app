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
          

        DB::table('news')->insert($data);
       
        // print '<pre>';
        // print_r($data);
        // dd($request->all());
      
    }


    
    public function show($id)
    {
       // $data = DB::table('news')->where('id',$id)->get();
        $data = DB::table('news')->where('id',$id)->first();
        print "<pre>";
        print_r($data);

        // return view('newsview.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('news')->where('id',$id)->get();
        print "<pre>";
        print_r($data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function newsdelete(Request $request, $id)
    {
        DB::table('news')->where('id', $id)->delete();
        // $news = Snews::find($id);
        // $news->delete();
        return redirect()->route('newsview')->with('success', 'Data Deleted');
    }
    
    
}
