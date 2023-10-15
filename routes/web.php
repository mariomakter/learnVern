<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/name/{firstName}/{lastName}', [DemoController::class, 'Demo']);



