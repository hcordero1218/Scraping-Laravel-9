<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScrapingController;


/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [ScrapingController::class, 'scrape']);
