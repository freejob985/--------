<?php

namespace App\Http\Controllers\back;

use App\blog;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class blogController extends Controller
{
    private $Path_pictures = "/front/assets/images/blog/";
    public $db = "المدونة";
    public $route = "blog";
    public $route_up = "blog";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blog = blog::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/2563/2563199.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/blog/create ";
        $Columns = array();
        $Columns[] = 'Image';
        $Columns[] = 'Title';
        $Columns[] = 'Author';
        $Columns[] = 'Language';
        return view('Back.Tables.blog.Presentation', compact('blog', 'Settings', 'Columns'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.blog.addition');

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
            'Title' => 'required',
            'Section' => 'required',
            'Language' => 'required',
            'explanation' => 'required',
            'Topic' => 'required',
        ], [
            'Title.required' => ' The data field is required',
            'Section.required' => ' The data field is required',
            'Language.required' => ' The data field is required',
            'explanation.required' => ' The data field is required',
            'Topic.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $blog = new blog();
        $blog->Image =Up_ِADD($request, 1920, 1280, $this->Path_pictures,"Image","services_");;
        $blog->Title = $request->input('Title');
        $blog->Section = $request->input('Section');
        $blog->Date =date(" l , F Y");
        $blog->Author = Auth::user()->name;
        $blog->Language = $request->input('Language');
        $blog->explanation = $request->input('explanation');
        $blog->Topic = $request->input('Topic');
        $blog->save();
        return redirect()->back()->with('alert-success', 'تمت اضافة موضوع جديد');
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
        $blog = blog::findOrFail($id);
        return view('Back.Tables.blog.Modification')->with(compact('blog', 'path'));
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
        $blog = blog::findOrFail($id);
        return view('Back.Tables.blog.Modification')->with(compact('blog', 'path'));
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
            'Language' => 'required',
            'explanation' => 'required',
            'Topic' => 'required',
        ], [
            'Title.required' => ' The data field is required',
            'Section.required' => ' The data field is required',
            'Language.required' => ' The data field is required',
            'explanation.required' => ' The data field is required',
            'Topic.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $blog = blog::findOrfail($id);
        $blog->Image =  UP_EX($request, 1920, 1280, $this->Path_pictures, $blog->Image,"Image","_BLOG_");;
        $blog->Title = $request->input('Title');
        $blog->Section = $request->input('Section');
        $blog->Date =date(" l , F Y");
        $blog->Author = Auth::user()->name;
        $blog->Language = $request->input('Language');
        $blog->explanation = $request->input('explanation');
        $blog->Topic = $request->input('Topic');
        $blog->save();
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
            $blog = blog::findOrfail($id);
            $blog->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
