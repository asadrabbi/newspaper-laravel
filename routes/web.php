<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
    $response = Http::get('https://content.guardianapis.com/search?api-key=d46b2605-1f09-4991-acc1-187d10567163');
    //dd($response->json());
    return view('data')->with('data',$response->json()['response']['results']);
});
