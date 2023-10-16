<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function showHome(){
        $data = array();
        $loginStatus = true;
        return view('Home', ['dataKey'=> $data, 'loginStatusKey'=> 'loginStatus']);
    }
}
