<?php

namespace App\Http\Controllers\back;

use App\gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class galleryController extends Controller
{
    private $Path_pictures = "/Front/assets/img/doctor/";
    public $db = "Our Gallery ";
    public $route = "gallery";
    public $route_up = "gallery";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gallery = gallery::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/856/856330.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "الصورة";
        $Columns[] = "العنوان";
        $Columns[] = "اللغة";
        return view('Back.Tables.gallery.Presentation', compact('gallery', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.gallery.addition');

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
            'Image' => 'required',
            'Language' => 'required',
        ], [
            'Title.required' => ' The data field is required',
            'Image.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $gallery = new gallery();
        $gallery->Title = $request->input('Title');
        $gallery->Image = Upload($request, 600, 600, $this->Path_pictures);;
        $gallery->Language = $request->input('Language');
        $gallery->save();
        latest_additions("معرض الصور");
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
        $services = gallery::findOrFail($id);
        return view('Back.Tables.gallery.Modification')->with(compact('gallery', 'path'));
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
        $gallery = gallery::findOrFail($id);
        return view('Back.Tables.gallery.Modification')->with(compact('gallery', 'path'));
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
            'Language' => 'required',
        ], [
            'Title.required' => ' The data field is required',
            'Language.required' => ' The data field is required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $gallery = gallery::findOrfail($id);
        $gallery->Title = $request->input('Title');
        $gallery->Image = Upload_($request, 600, 600, $this->Path_pictures,$gallery->Image);
        $gallery->Language = $request->input('Language');
        $gallery->save();
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
            $gallery = gallery::findOrfail($id);
            $gallery->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
