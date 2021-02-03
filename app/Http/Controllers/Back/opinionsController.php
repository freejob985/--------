<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\opinions;
use Illuminate\Http\Request;
use Validator;

class opinionsController extends Controller
{
    private $Path_pictures = "/front/assets/images/testimonials/";
    public $db = "opinions";
    public $route = "opinions";
    public $route_up = "opinions";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $opinions = opinions::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/994/994807.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "60";
        $Settings[] = "/admin/opinions/create ";
        $Columns = array();
        $Columns[] = 'image';
        $Columns[] = 'comment';
        $Columns[] = 'Name';
        $Columns[] = 'Job';
        $Columns[] = 'Language';
        return view('Back.Tables.opinions.Presentation', compact('opinions', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.opinions.addition');

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
            'image' => 'required',
            'comment' => 'required',
            'Name' => 'required',
            'Job' => 'required',
            'Language' => 'required',
        
        ], [
            'image.required' => ' The data field is required',
            'comment.required' => ' The data field is required',
            'Name.required' => ' The data field is required',
            'Job.required' => ' The data field is required',
            'Language.required' => ' The data field is required',
     

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $opinions = new opinions();
        $opinions->image = Up_ِADD($request, 200, 200, $this->Path_pictures,"image","_opinions_");
        $opinions->comment = $request->input('comment');
        $opinions->Name = $request->input('Name');
        $opinions->Job = $request->input('Job');
        $opinions->Language = $request->input('Language');
        $opinions->save();
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
        $opinions = opinions::findOrFail($id);
        return view('Back.Tables.opinions.Modification')->with(compact('opinions', 'path'));
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
        $opinions = opinions::findOrFail($id);
        return view('Back.Tables.opinions.Modification')->with(compact('opinions', 'path'));
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
            'comment' => 'required',
            'Name' => 'required',
            'Job' => 'required',
            'Language' => 'required',
        
        ], [
            'comment.required' => ' The data field is required',
            'Name.required' => ' The data field is required',
            'Job.required' => ' The data field is required',
            'Language.required' => ' The data field is required',
     

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $opinions = opinions::findOrfail($id);
        $opinions->image = UP_EX($request, 200, 200, $this->Path_pictures, $opinions->image,"image","_opinions_");
        $opinions->comment = $request->input('comment');
        $opinions->Name = $request->input('Name');
        $opinions->Job = $request->input('Job');
        $opinions->Language = $request->input('Language');
    
        $opinions->save();
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
            $opinions = opinions::findOrfail($id);
            $opinions->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
