<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comicsArray = config('comics');   //prende i dati del file config.php nella cartella config 
    // dd($comicsArray);
    
    $data = [
        'comics' => $comicsArray
    ];

    return view('home', $data);
});
