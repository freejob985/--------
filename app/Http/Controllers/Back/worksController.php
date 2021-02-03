<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\works;
use Illuminate\Http\Request;
use Validator;

class worksController extends Controller
{
    private $Path_pictures = "/front/assets/images/projects/";
    public $db = "الأعمال ";
    public $route = "works";
    public $route_up = "works";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $works = works::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/1055/1055646.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/works/create ";
        $Columns = array();
        $Columns[] = 'Image';
        $Columns[] = 'Title';
        $Columns[] = 'Section';
        $Columns[] = 'explanation';
        $Columns[] = 'Language';
        return view('Back.Tables.works.Presentation', compact('works', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.works.addition');

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
            'Image' => 'required',
            'Title' => 'required',
            'Section' => 'required',
            'explanation' => 'required',
            'Language' => 'required',

        ], [
            'Image.required' => ' The data field is required',
            'Title.required' => ' The data field is required',
            'Section.required' => ' The data field is required',
            'explanation.required' => ' The data field is required',
            'Language.required' => ' The data field is required',
        ]);

        if ($validator->fails()) {
      
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $works = new works();
        $works->Image = Up_ِADD($request, 1280, 960, $this->Path_pictures, "Image", "_works_");
        $works->Title = $request->input('Title');
        $works->Section = $request->input('Section');
        $works->explanation = $request->input('explanation');
        $works->Language = $request->input('Language');
        $works->save();
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
        $works = works::findOrFail($id);
        return view('Back.Tables.works.Modification')->with(compact('works', 'path'));
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
        $works = works::findOrFail($id);
        return view('Back.Tables.works.Modification')->with(compact('works', 'path'));
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
            'Title' => 'required',
            'Section' => 'required',
            'explanation' => 'required',
            'Language' => 'required',

        ], [
            'Title.required' => ' The data field is required',
            'Section.required' => ' The data field is required',
            'explanation.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $works = works::findOrfail($id);
        $works->Image = UP_EX($request, 1280, 960, $this->Path_pictures, $works->Image, "Image", "_works_");
        $works->Title = $request->input('Title');
        $works->Section = $request->input('Section');
        $works->explanation = $request->input('explanation');
        $works->Language = $request->input('Language');
        $works->save();
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
        if (DelFilePath($this->Path_pictures, $img) == true) {
            $works = works::findOrfail($id);
            $works->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
