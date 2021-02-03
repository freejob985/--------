<?php

namespace App\Http\Controllers\back;

use App\component;
use App\contact;
use App\Http\Controllers\back\componentup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class componentController extends Controller
{

    public function show_com1($lang)
    {
        if ($lang == "English") {
            $component = component::findOrFail(1);
        } else {
            $component = component::findOrFail(7);
        }

        return view('Back.Tables.component.file1')->with(compact('component'));
    }
    public function show_com2($lang)
    {
        if ($lang == "English") {
            $component = component::findOrFail(2);
        } else {
            $component = component::findOrFail(8);
        }
        return view('Back.Tables.component.file2')->with(compact('component'));
    }

    public function show_com3($lang)
    {
        if ($lang == "English") {
            $component = component::findOrFail(3);
        } else {
            $component = component::findOrFail(9);
        }

        return view('Back.Tables.component.file3')->with(compact('component'));
    }

    public function show_com4($lang)
    {
        if ($lang == "English") {
            $component = component::findOrFail(4);
        } else {
            $component = component::findOrFail(10);
        }
        return view('Back.Tables.component.file4')->with(compact('component'));
    }

    public function show_com5($lang)
    {
        if ($lang == "English") {
            $component = component::findOrFail(5);
        } else {
            $component = component::findOrFail(11);
        }
        return view('Back.Tables.component.file5')->with(compact('component'));
    }

    public function show_com6($lang)
    {
        if ($lang == "English") {
            $component = component::findOrFail(6);
        } else {
            $component = component::findOrFail(12);
        }
        return view('Back.Tables.component.file6')->with(compact('component'));
    }


    public function component(Request $request, $id, $pag)
    {
        if ($pag == "index") {
            $componentup = new componentup();
            $componentup->index($request, $id);
            return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
        } else if ($pag == "blog") {
            $componentup = new componentup();
            $componentup->blog($request, $id);
            return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
        } else if ($pag == "about") {
            $componentup = new componentup();
            $componentup->about($request, $id);
            return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
        } else if ($pag == "services") {
            $componentup = new componentup();
            $componentup->services($request, $id);
            return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
        } else if ($pag == "portfolio") {
            $componentup = new componentup();
            $componentup->portfolio($request, $id);
            return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
        } else if ($pag == "contact") {
            $componentup = new componentup();
            $componentup->contact($request, $id);
            return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
        } 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
