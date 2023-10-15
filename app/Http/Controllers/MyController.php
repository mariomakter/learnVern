<?php

namespace App\Http\Controllers;


class MyController extends Controller
{
    public function __invoke(){
        return "I am single Action Controller";
    }
}
