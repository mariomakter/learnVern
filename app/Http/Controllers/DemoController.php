<?php

namespace App\Http\Controllers;

class DemoController extends Controller
{
    public function Demo($firstNam, $lastName)
    {
        return "First Name: ".$firstNam." Last Name: ".$lastName;
    }
}
