<?php

namespace App\Http\Controllers;

use App\zirmenu;
use App\contentmenu;
use Illuminate\Http\Request;

class ZirmenuController extends Controller
{


    public function create()
    {
        $contentmenu=contentmenu::all();
        return view('adminpanel.zirmenu.create',compact('contentmenu'));
    }


    public function store(Request $request)
    {
        $data=$request->validate([
            'menuname'=>'string',
            'zirmenuname'=>'string',
            'linkzirmenu'=>'string'
        ]);
        zirmenu::create($data);
        return back()->withMessage('با موفقیت ثبت گردید');

    }


    public function show(zirmenu $zirmenu)
    {
        //
    }


    public function edit(zirmenu $zirmenu)
    {
        //
    }


    public function update(Request $request, zirmenu $zirmenu)
    {
        //
    }


    public function destroy(zirmenu $zirmenu)
    {
        //
    }
}
