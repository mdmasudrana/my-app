<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

function insert(Request $request)
    {
        $Fullname = $reqest->input('Fullname');
        $Email = $request->input('Email');
        $country = $request->input('country');
        $Message = $request->input('Message');
        $Mobile = $request->input('Mobile');

        $data = array('Fullname'=>$Fullname,"Email"=>$Email,"country"=>$country,"Message"=>$Message,"Mobile"=>$Mobile);

        DB::table('users')->insert($data);
        echo "Success";
    }
}
