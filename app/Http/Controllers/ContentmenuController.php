<?php

namespace App\Http\Controllers;

use App\contentmenu;
use Illuminate\Http\Request;

class ContentmenuController extends Controller
{

    public function index()
    {
        return view('adminpanel.contentmenu.create');
    }


    public function create(Request $request)
    {
           $data=$request->validate([

            'menuname'=>'string',
            'linkmenu'=>'string'

            ]);
        contentmenu::create($data);
        return back()->withMessage("با موفقیت ثبت گردید");


    }


    public function store(Request $request)
    {
        //
    }

    public function show(contentmenu $contentmenu)
    {
        $contentmenu=contentmenu::all();
        return view('adminpanel.contentmenu.manage',compact('contentmenu'));
    }


    public function edit(contentmenu $id)
    {
       return view('adminpanel.contentmenu.update',compact('id'));
    }


    public function update(Request $request, contentmenu $id)
    {
        $data=$request->validate([

            'menuname'=>'string',
            'linkmenu'=>'string'

        ]);

        $id->update($data);
        return back()->withMessage('با موفقیت ویرایش گردید');
    }


    public function destroy(contentmenu $id)
    {
        $id->delete();
        return back();
    }
}
