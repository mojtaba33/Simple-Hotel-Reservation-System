<?php

use Illuminate\Support\Facades\Auth;
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
// I want to all routes that not have api prefix go to this route
Route::get('/{all?}', function () {
    return view('welcome');
})->where('all','^(?!api\/)[\/\w\.\,-]*');

Auth::routes();
