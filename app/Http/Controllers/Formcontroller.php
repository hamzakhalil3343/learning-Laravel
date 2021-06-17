<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class Formcontroller extends Controller
{
    //
    function getData(Request $req){
        return  $req->input();
    }
}
