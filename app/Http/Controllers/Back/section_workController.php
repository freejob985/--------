<?php

namespace App\Http\Controllers\back;

use Validator;
use App\section_work;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class section_workController extends Controller
{
    private $Path_pictures = "/admin/addpag/customers/";
    public $db = "اقسام الاعمال";
    public $route = "section_work";
    public $route_up = "section_work";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $section_work = section_work::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/786/786808.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/section_work/create ";
        $Columns = array();
        $Columns[] = 'Section';
        $Columns[] = 'Language';
        return view('Back.Tables.section_work.Presentation', compact('section_work', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.section_work.addition');

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
            'Section' => 'required',
            'Language' => 'required',

        ], [
            'Section.required' => ' The data field is required',
            'Language.required' => ' The data field is required',
         

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $section_work = new section_work();
        $section_work->Section = $request->input('Section');
        $section_work->slug = Str::slug($request->input('Section'), '-') ;
        $section_work->Language = $request->input('Language');

        $section_work->save();
        return redirect()->back()->with('alert-success', 'تمت اضافة موضوع جديد');
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
        $section_work = section_work::findOrFail($id);
        return view('Back.Tables.section_work.Modification')->with(compact('section_work', 'path'));
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
        $section_work = section_work::findOrFail($id);
        return view('Back.Tables.section_work.Modification')->with(compact('section_work', 'path'));
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
            'Section' => 'required',
            'Language' => 'required',

        ], [
            'Section.required' => ' The data field is required',

            'Language.required' => ' The data field is required',
         

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $section_work = section_work::findOrfail($id);
        $section_work->Section = $request->input('Section');
        $section_work->slug =Str::slug($request->input('Section'), '-') ;
        $section_work->Language = $request->input('Language');

        $section_work->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            $section_work = section_work::findOrfail($id);
            $section_work->destroy($id);

        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
