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
Route::view("/","hello");
// Route::get('/{name}', function ($name) {
//     return view('hello',["name"=>$name]);
// });
Route::view("welcome","welcome");

