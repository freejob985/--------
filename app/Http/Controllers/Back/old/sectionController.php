<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\section;
use Illuminate\Http\Request;
use Validator;

class sectionController extends Controller
{
    private $Path_pictures = "/";
    public $db = "sections";
    public $route = "section";
    public $route_up = "section";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $section = section::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "Linked to the blog's schedule through sections";
        $Settings[] = 'https://image.flaticon.com/icons/svg/1907/1907556.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "sections";
        $Columns[] = "Language";
        return view('Back.Tables.section.Presentation', compact('section', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.section.addition');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sections' => 'required',
            'Language' => 'required',
        ], [
            'sections.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $section = new section();
        $section->sections = $request->input('sections');
        $section->Language = $request->input('Language');
        $section->save();
        return redirect()->back()->with('alert-success', 'تمت اضافة موضوع جديد');
        latest_additions("قسم مدونة جديد");
        // Store the blog post...
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $path = $this->Path_pictures;
        $services = section::findOrFail($id);
        return view('Back.Tables.section.Modification')->with(compact('section', 'path'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $path = $this->Path_pictures;
        $section = section::findOrFail($id);
        return view('Back.Tables.section.Modification')->with(compact('section', 'path'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'sections' => 'required',
            'Language' => 'required',
        ], [
            'sections.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $section = section::findOrfail($id);
        $section->sections = $request->input('sections');
        $section->Language = $request->input('Language');
        $section->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $img)
    {

            $section = section::findOrfail($id);
            $section->destroy($id);

        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
