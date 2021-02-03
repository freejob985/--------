<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\recent;
use Illuminate\Http\Request;
use Validator;

class recentController extends Controller
{
    private $Path_pictures = "/front/assets/images/projects/";
    public $db = "RECENT WORKS";
    public $route = "recent";
    public $route_up = "recent";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recent = recent::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/1420/1420337.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/recent/create ";
        $Columns = array();
        $Columns[] = 'Name';
        $Columns[] = 'Section';
        $Columns[] = 'Image';
        $Columns[] = 'Explanation';
        $Columns[] = 'Language';
        return view('Back.Tables.recent.Presentation', compact('recent', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.recent.addition');

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
            'Name' => 'required',
            'Section' => 'required',
            'Image' => 'required',
            'Explanation' => 'required',
            'Language' => 'required',
        ], [
            'Name.required' => ' The data field is required',
            'Section.required' => ' The data field is required',
            'Image.required' => ' The data field is required',
            'Explanation.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $recent = new recent();
        $recent->Name = $request->input('Name');
        $recent->Section = $request->input('Section');
        $recent->Image = $request->input('Image');
        $recent->Explanation = $request->input('Explanation');
        $recent->Language = $request->input('Language');
        $recent->save();
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
        $recent = recent::findOrFail($id);
        return view('Back.Tables.recent.Modification')->with(compact('recent', 'path'));
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
        $recent = recent::findOrFail($id);
        return view('Back.Tables.recent.Modification')->with(compact('recent', 'path'));
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
            'Name' => 'required',
            'Section' => 'required',
            'Explanation' => 'required',
            'Language' => 'required',
        ], [
            'Name.required' => ' The data field is required',
            'Section.required' => ' The data field is required',
            'Explanation.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $recent = recent::findOrfail($id);
        $recent->Name = $request->input('Name');
        $recent->Section = $request->input('Section');
        $recent->Image = UP_EX($request, 1280, 960, $this->Path_pictures, $recent->Image,"Image","_recent_");
        $recent->Explanation = $request->input('Explanation');
        $recent->Language = $request->input('Language');
        $recent->save();
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
            $recent = recent::findOrfail($id);
            $recent->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
