<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
     
    function viewLoad(){
        $data = ['hamza','umair','bilal'];
        return view('users',['users'=>$data]);
    }
}
