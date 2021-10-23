<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Job;


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
//Route::middleware(['cors'])->group(function () {


    Route::post('jobs',  [Job::class,'store']);

    Route::view('jobs',  'jobg3');

    Route::view('example',  'example');

//});
