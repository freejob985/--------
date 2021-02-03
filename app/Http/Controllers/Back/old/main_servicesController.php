<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\main_services;
use Illuminate\Http\Request;
use Validator;

class main_servicesController extends Controller
{
    private $Path_pictures = "/";
    public $db = "Our Main Services ";
    public $route = "main_services";
    public $route_up = "main_services";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $main_services = main_services::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "";
        $Settings[] = 'https://image.flaticon.com/icons/svg/762/762597.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "Title";
        $Columns[] = "Explanation";
        $Columns[] = "Language";
        return view('Back.Tables.main_services.Presentation', compact('main_services', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.main_services.addition');

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
            'Explanation' => 'required',
            'Icon' => 'required',
            'Language' => 'required',

        ], [
            'Title.required' => ' The data field is required',
            'Explanation.required' => ' The data field is required',
            'Icon.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $main_services = new main_services();
        $main_services->Title = $request->input('Title');
        $main_services->Explanation = $request->input('Explanation');
        $main_services->Icon = $request->input('Icon');
        $main_services->Language = $request->input('Language');
        $main_services->save();
        return redirect()->back()->with('alert-success', 'تمت اضافة موضوع جديد');
        latest_additions("الخدمات الرئسية");
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
        $services = main_services::findOrFail($id);
        return view('Back.Tables.main_services.Modification')->with(compact('main_services', 'path'));
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
        $main_services = main_services::findOrFail($id);
        return view('Back.Tables.main_services.Modification')->with(compact('main_services', 'path'));
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
            'Icon' => 'required',
            'Language' => 'required',

        ], [
            'Title.required' => ' The data field is required',
            'Explanation.required' => ' The data field is required',
            'Icon.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $main_services = main_services::findOrfail($id);
        $main_services->Title = $request->input('Title');
        $main_services->Explanation = $request->input('Explanation');
        $main_services->Icon = $request->input('Icon');
        $main_services->Language = $request->input('Language');
        $main_services->save();
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
     
            $main_services = main_services::findOrfail($id);
            $main_services->destroy($id);
       
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
