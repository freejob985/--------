<?php

namespace App\Http\Controllers\back;

use App\blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class blogController extends Controller
{
    private $Path_pictures = "/Front/assets/img/blog/";
    public $db = "News & Blog ";
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
        $Settings[] = "The News from Our Blog ";
        $Settings[] = 'https://image.flaticon.com/icons/svg/1197/1197511.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "200";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "الصورة";
        $Columns[] = "العنوان";
        $Columns[] = "الشرح";
        $Columns[] = "التاريخ";
        $Columns[] = "اللغة";
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
        //   dd(Auth::user()->name);
        $validator = Validator::make($request->all(), [
            'Title' => 'required',
            'Explanation' => 'required',
            'Topic' => 'required',
            'Image' => 'required',
            'Language' => 'required',

        ], [
            'Title.required' => ' The data field is required',
            'Explanation.required' => ' The data field is required',
            'Topic.required' => ' The data field is required',
            'Image.required' => ' The data field is required',
            'Language.required' => ' The data field is required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        } 

        $blog = new blog();
        $blog->Title = $request->input('Title');
        $blog->by = Auth::user()->name;
        $blog->Date = date(" l , F Y");
        $blog->Explanation = $request->input('Explanation');
        $blog->Topic = $request->input('Topic');
        $blog->Image = Upload($request, 850, 600, $this->Path_pictures);
        $blog->Language = $request->input('Language');
        $blog->id_section = $request->input('id_section');
        $blog->save();
        latest_additions("المدونة");
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
        $services = blog::findOrFail($id);
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
            'Explanation' => 'required',
            'Topic' => 'required',
            'Image' => 'required',
            'Language' => 'required',

        ], [
            'Title.required' => ' The data field is required',
            'Explanation.required' => ' The data field is required',
            'Topic.required' => ' The data field is required',
            'Image.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $blog = blog::findOrfail($id);
        $blog->Title = $request->input('Title');
        $blog->by = Auth::user()->name;
        $blog->Date = date(" l , F Y");
        $blog->Explanation = $request->input('Explanation');
        $blog->Topic = $request->input('Topic');
        $blog->Image = Upload_($request, 850, 600, $this->Path_pictures, $blog->Image);
        $blog->Language = $request->input('Language');
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
