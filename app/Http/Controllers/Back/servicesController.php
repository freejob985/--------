<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\services;
use Illuminate\Http\Request;
use Validator;

class servicesController extends Controller
{
    private $Path_pictures = "/front/assets/images/services/";
    public $db = "services";
    public $route = "services";
    public $route_up = "services";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = services::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/1202/1202756.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/services/create ";
        $Columns = array();
        $Columns[] = 'Title';
        $Columns[] = 'Topic';
        $Columns[] = 'Image';
        $Columns[] = 'Language';
        return view('Back.Tables.services.Presentation', compact('services', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.services.addition');

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
            'Topic' => 'required',
            'Language' => 'required',
        ], [
            'Title.required' => ' The data field is required',
            'Topic.required' => ' The data field is required',
            'Language.required' => ' The data field is required',
         

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $services = new services();
        $services->Title = $request->input('Title');
        $services->Topic = $request->input('Topic');
        $services->Image = Up_ِADD($request, 1920, 1280, $this->Path_pictures,"Image","services_");;
        $services->Language = $request->input('Language');

        $services->save();
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
        $services = services::findOrFail($id);
        return view('Back.Tables.services.Modification')->with(compact('services', 'path'));
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
        $services = services::findOrFail($id);
        return view('Back.Tables.services.Modification')->with(compact('services', 'path'));
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
            'Topic' => 'required',
            'Language' => 'required',
        ], [
            'Title.required' => ' The data field is required',
            'Topic.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $services = services::findOrfail($id);
        $services->Title = $request->input('Title');
        $services->Topic = $request->input('Topic');
        $services->Image =  UP_EX($request, 1920, 1280, $this->Path_pictures, $services->Image,"Image","_services_");
        $services->Language = $request->input('Language');
        $services->save();
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
            $services = services::findOrfail($id);
            $services->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
