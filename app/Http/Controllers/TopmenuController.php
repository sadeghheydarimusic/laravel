<?php

namespace App\Http\Controllers;

use App\topmenu;
use Illuminate\Http\Request;

class TopmenuController extends Controller
{

    public function create()
    {
        return view('adminpanel.topmenu.create');
    }


    public function store(Request $request)
    {
       $data=$request->validate([
           'menuname'=>'required',
           'link_menu'=>'nullable',
           ]);
        topmenu::create($data);
        return back()->withMessage("با موفقیت ثبت گردید");
    }


    public function show(topmenu $topmenu)
    {
        $topmenu=topmenu::all();
        return view('adminpanel.topmenu.manage',compact('topmenu'));
    }


    public function edit(topmenu $id)
    {
        return view('adminpanel.topmenu.update',compact('id'));
    }


    public function update(Request $request, topmenu $id)
    {
        $data=$request->validate([
            'menuname'=>'required',
            'link_menu'=>'nullable',
        ]);
        $id->update($data);
        return back()->withMessage("با موفقیت ویرایش گردید");
    }

    public function destroy(topmenu $id)
    {
        $id->delete();
        return redirect('topmenu/manage');
    }
}
