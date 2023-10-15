<?php

namespace App\Http\Controllers;

class DemoController extends Controller
{
    public function Demo($firstName, $lastName)
    {
        return view('DemoView', ['firstKey'=> $firstName, 'lastKey'=> $lastName]);
    }
}
