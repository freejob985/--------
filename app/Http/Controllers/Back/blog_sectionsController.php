<?php

namespace App\Http\Controllers\back;

use App\blog_sections;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class blog_sectionsController extends Controller
{
    private $Path_pictures = "/";
    public $db = "اقسام المدونة";
    public $route = "blog_sections";
    public $route_up = "blog_sections";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blog_sections = blog_sections::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/2126/2126768.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/blog_sections/create ";
        $Columns = array();
        $Columns[] = 'Section';
        $Columns[] = 'Language';
        return view('Back.Tables.blog_sections.Presentation', compact('blog_sections', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.blog_sections.addition');

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
        $blog_sections = new blog_sections();
        $blog_sections->Section = $request->input('Section');
        $blog_sections->Language = $request->input('Language');
        $blog_sections->save();
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
        $blog_sections = blog_sections::findOrFail($id);
        return view('Back.Tables.blog_sections.Modification')->with(compact('blog_sections', 'path'));
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
        $blog_sections = blog_sections::findOrFail($id);
        return view('Back.Tables.blog_sections.Modification')->with(compact('blog_sections', 'path'));
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
        $blog_sections = blog_sections::findOrfail($id);
        $blog_sections->Section = $request->input('Section');
        $blog_sections->Language = $request->input('Language');
        $blog_sections->save();
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

            $blog_sections = blog_sections::findOrfail($id);
            $blog_sections->destroy($id);

        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
