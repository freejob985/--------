<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\instagram;
use Illuminate\Http\Request;
use Validator;

class instagramController extends Controller
{
    private $Path_pictures = "/front/assets/images/blog/";
    public $db = "Instagram";
    public $route = "instagram";
    public $route_up = "instagram";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $instagram = instagram::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/1051/1051262.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/instagram/create ";
        $Columns = array();
        $Columns[] = 'Image';
        return view('Back.Tables.instagram.Presentation', compact('instagram', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.instagram.addition');

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
        ], [
            'Image.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $instagram = new instagram();
        $instagram->Image = Up_ِADD($request, 648, 558, $this->Path_pictures,"Image","_instagram_");;;
        $instagram->save();
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
        $instagram = instagram::findOrFail($id);
        return view('Back.Tables.instagram.Modification')->with(compact('instagram', 'path'));
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
        $instagram = instagram::findOrFail($id);
        return view('Back.Tables.instagram.Modification')->with(compact('instagram', 'path'));
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
        $instagram = instagram::findOrfail($id);
        $instagram->Image =  UP_EX($request, 648, 558, $this->Path_pictures, $instagram->Image,"Image","_instagram_");;
        $instagram->save();
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
            $instagram = instagram::findOrfail($id);
            $instagram->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
