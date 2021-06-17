<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Formcontroller;
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
    return view('users');
});
Route::view("welcome","welcome");

// Route::get('users/{name}',[Users::class,'index']);
Route::get('users',[UsersController::class,'viewLoad']);
//HTML Form 
Route::view("form","formData");
Route::post('form',[Formcontroller::class,'getData']);

//Global Middle wares 
Route::view("noaccess","noaccess");
Route::view("home","home");

//Group MW
Route::group(['middleware'=>['protectedPages']],function(){
    Route::view("groupMW","groupMW"); 
});
