<?php

namespace App\Http\Controllers;

class DemoController extends Controller
{
    public function Demo($firstName, $lastName)
    {
        return view('DemoView', ['firstkey'=> $firstName, 'lastName'=> $lastName]);
    }
}
