<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/name/{firstName}/{lastName}', [DemoController::class, 'Demo']);
Route::group(['prefix'=> 'account'], function(){
    Route::get('/login', function(){
        return "Login";
    });
    Route::get('/logout', function(){
        return "Logout";
    });
    Route::get('/signup', function(){
        return "signup";
    });
});


