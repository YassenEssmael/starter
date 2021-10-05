<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   
   
   
    public function con(){
       $obj = new \stdClass();
    
       
       //    $data=[];
    //    $data['id']='23';
    //    $data['name']='ahmad';
     
        return view ('welcome',compact('obj'));

    }
}
