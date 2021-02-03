<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\slide;
use Illuminate\Http\Request;
use Validator;

class slideController extends Controller
{
    private $Path_pictures = "/front/assets/images/backgrounds/fullscreen/";
    public $db = "السلايدر";
    public $route = "slide";
    public $route_up = "slide";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slide = slide::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/2497/2497986.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/slide/create ";
        $Columns = array();
        $Columns[] = 'Subject';
        $Columns[] = 'Title';
        $Columns[] = 'Sub';
        $Columns[] = 'Additional';
        $Columns[] = 'Link';
        $Columns[] = 'Image';
        $Columns[] = 'Language';
        return view('Back.Tables.slide.Presentation', compact('slide', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.slide.addition');

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
            'Subject' => 'required',
            'Title' => 'required',
            'Sub' => 'required',
            'Additional' => 'required',
            'Link' => 'required',
            'Image' => 'required',
            'Language' => 'required',

        ], [
            'Subject.required' => ' The data field is required',
            'Title.required' => ' The data field is required',
            'Sub.required' => ' The data field is required',
            'Additional.required' => ' The data field is required',
            'Link.required' => ' The data field is required',
            'Image.required' => ' The data field is required',
            'Language.required' => ' The data field is required',


        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $slide = new slide();
        $slide->Subject = $request->input('Subject');
        $slide->Title = $request->input('Title');
        $slide->Sub = $request->input('Sub');
        $slide->Additional = $request->input('Additional');
        $slide->Link = $request->input('Link');
        $slide->Image = Up_ِADD($request, 1920, 800, $this->Path_pictures,"Image","_slide_");;
        $slide->Language = $request->input('Language');
        $slide->save();
        return redirect()->back()->with('alert-success', 'تمت اضافة موضوع جديد');
        // Store the blog post...1920 x 800
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
        $slide = slide::findOrFail($id);
        return view('Back.Tables.slide.Modification')->with(compact('slide', 'path'));
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
        $slide = slide::findOrFail($id);
        return view('Back.Tables.slide.Modification')->with(compact('slide', 'path'));
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
            'Subject' => 'required',
            'Title' => 'required',
            'Sub' => 'required',
            'Additional' => 'required',
            'Link' => 'required',
            'Language' => 'required',
        ], [
            'Subject.required' => ' The data field is required',
            'Title.required' => ' The data field is required',
            'Sub.required' => ' The data field is required',
            'Additional.required' => ' The data field is required',
            'Link.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $slide = slide::findOrfail($id);
        $slide->Subject = $request->input('Subject');
        $slide->Title = $request->input('Title');
        $slide->Sub = $request->input('Sub');
        $slide->Additional = $request->input('Additional');
        $slide->Link = $request->input('Link');
        $slide->Image =  UP_EX($request, 1920, 800, $this->Path_pictures, $slide->Image,"Image","_slide_");
        $slide->Language = $request->input('Language');
        $slide->save();
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
            $slide = slide::findOrfail($id);
            $slide->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
