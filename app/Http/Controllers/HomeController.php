<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user=auth()->user();
        $active=$user->active;
        if($user->admin && $active==true){
            return view('adminpanel.index');
        }else {
           echo "حساب شما غیرفعال میباشد";
        }
    }
}
