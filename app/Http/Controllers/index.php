<?php

namespace App\Http\Controllers;
use App\topmenu;
use Illuminate\Http\Request;

class index extends Controller
{
    function index(){

    $topmenu=topmenu::all();

    return view('index',compact('topmenu'));


    }
}
