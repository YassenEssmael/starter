<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller ;

class secondController extends Controller
{

public function __construct(){
    $this ->middleware('auth')->except('show1');

}


    public function show1()
    {
           return 'static string1';
    }
    public function show2()
    {
           return 'static string2';
    }
    public function show3()
    {
           return 'static string3';
    }
}
