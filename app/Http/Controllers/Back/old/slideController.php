<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\slide;
use Illuminate\Http\Request;
use Validator;

class slideController extends Controller
{
    private $Path_pictures = "/Front/assets/img/slide/";
    public $db = "Slideshow";
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
        $Settings[] = "Ads on the home page";
        $Settings[] = 'https://image.flaticon.com/icons/svg/1095/1095764.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/Front/assets/img/slide/";
        $Columns = array();
        $Columns[] = "الصورة";
        $Columns[] = "العنوان";
        $Columns[] = "العنوان الفرعي";
        $Columns[] = "اليوتيوب";
        $Columns[] = "اللغة";
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
            'address' => 'required',
            'Sub' => 'required',
            'Additional' => 'required',
            'YouTube' => 'required|active_url',
            'Image' => 'required',
            'language' => 'required',
        ], [
            'address.required' => ' The data field is required',
            'Sub.required' => ' The data field is required',
            'Additional.required' => ' The data field is required',
            'YouTube.required' => ' The data field is required',
            'Image.required' => ' The data field is required',
            'language.required' => ' The data field is required',
      ]);
    
        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
               
        }
       
        $slide = new slide();
        $slide->address = $request->input('address');
        $slide->Sub = $request->input('Sub');
        $slide->Additional = $request->input('Additional');
        $slide->YouTube = $request->input('YouTube');
        $slide->img =  Upload($request, 1920, 1080, $this->Path_pictures);;
        $slide->language = $request->input('language');
        $slide->save();
        return redirect()->back()->with('alert-success', 'تمت اضافة موضوع جديد');
        latest_additions("شرائح الاعلانات");
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
        $services = slide::findOrFail($id);
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
            'address' => 'required',
            'Sub' => 'required',
            'Additional' => 'required',
            'YouTube' => 'required',
            'Image' => 'required',
            'language' => 'required',
        ], [
            'address.required' => ' The data field is required',
            'Sub.required' => ' The data field is required',
            'Additional.required' => ' The data field is required',
            'YouTube.required' => ' The data field is required',
            'Image.required' => ' The data field is required',
            'language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $slide = slide::findOrfail($id);
        $slide->address = $request->input('address');
        $slide->Sub = $request->input('Sub');
        $slide->Additional = $request->input('Additional');
        $slide->YouTube = $request->input('YouTube');
        $slide->img = Upload_($request,  1920, 1080, $this->Path_pictures,$slide->img);
        $slide->language = $request->input('language');
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
