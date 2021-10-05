<?php


namespace App\Http\Controllers\Front;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class userController extends BaseController
{
   // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function showUsers(){

        return 'yassen,ahmad';
    }
    public function index(){
       return view('landing');
    }
}
