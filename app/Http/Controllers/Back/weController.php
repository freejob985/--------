<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\we;
use Illuminate\Http\Request;
use Validator;

class weController extends Controller
{
    private $Path_pictures = "/front/assets/images/services/";
    public $db = "What We Do";
    public $route = "we";
    public $route_up = "we";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $we = we::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/2605/2605957.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/we/create ";
        $Columns = array();
        $Columns[] = 'Component1';
        $Columns[] = 'Component2';
        $Columns[] = 'Component3';
        $Columns[] = 'Language';
        return view('Back.Tables.we.Presentation', compact('we', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.we.addition');

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
            'Component2' => 'required',
            'Component3' => 'required',
            'Component4' => 'required',
            'Component5' => 'required',
            'Component6' => 'required',
            'Component7' => 'required',
            'Component8' => 'required',
            'Component9' => 'required',
            'Component10' => 'required',
            'Component11' => 'required',
            'Component12' => 'required',
            'Language' => 'required',
        ], [
            'Image.required' => ' The data field is required',
            'Component2.required' => ' The data field is required',
            'Component3.required' => ' The data field is required',
            'Component4.required' => ' The data field is required',
            'Component5.required' => ' The data field is required',
            'Component6.required' => ' The data field is required',
            'Component7.required' => ' The data field is required',
            'Component8.required' => ' The data field is required',
            'Component9.required' => ' The data field is required',
            'Component10.required' => ' The data field is required',
            'Component11.required' => ' The data field is required',
            'Component12.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $we = new we();
        $we->Component1 = Up_ِADD($request, 1920, 1510, $this->Path_pictures,"Image","services_");;;
        $we->Component2 = $request->input('Component2');
        $we->Component3 = $request->input('Component3');
        $we->Component4 = $request->input('Component4');
        $we->Component5 = $request->input('Component5');
        $we->Component6 = $request->input('Component6');
        $we->Component7 = $request->input('Component7');
        $we->Component8 = $request->input('Component8');
        $we->Component9 = $request->input('Component9');
        $we->Component10 = $request->input('Component10');
        $we->Component11 = $request->input('Component11');
        $we->Component12 = $request->input('Component12');
        $we->Language = $request->input('Language');
        $we->save();
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
        $we = we::findOrFail($id);
        return view('Back.Tables.we.Modification')->with(compact('we', 'path'));
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
        $we = we::findOrFail($id);
        return view('Back.Tables.we.Modification')->with(compact('we', 'path'));
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
            'Component2' => 'required',
            'Component3' => 'required',
            'Component4' => 'required',
            'Component5' => 'required',
            'Component6' => 'required',
            'Component7' => 'required',
            'Component8' => 'required',
            'Component9' => 'required',
            'Component10' => 'required',
            'Component11' => 'required',
            'Component12' => 'required',
            'Language' => 'required',
        ], [
            'Component2.required' => ' The data field is required',
            'Component3.required' => ' The data field is required',
            'Component4.required' => ' The data field is required',
            'Component5.required' => ' The data field is required',
            'Component6.required' => ' The data field is required',
            'Component7.required' => ' The data field is required',
            'Component8.required' => ' The data field is required',
            'Component9.required' => ' The data field is required',
            'Component10.required' => ' The data field is required',
            'Component11.required' => ' The data field is required',
            'Component12.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $we = we::findOrfail($id);
        $we->Component1 = UP_EX($request, 1920, 1510, $this->Path_pictures, $we->Component1,"Image","_WE_");;
        $we->Component2 = $request->input('Component2');
        $we->Component3 = $request->input('Component3');
        $we->Component4 = $request->input('Component4');
        $we->Component5 = $request->input('Component5');
        $we->Component6 = $request->input('Component6');
        $we->Component7 = $request->input('Component7');
        $we->Component8 = $request->input('Component8');
        $we->Component9 = $request->input('Component9');
        $we->Component10 = $request->input('Component10');
        $we->Component11 = $request->input('Component11');
        $we->Component12 = $request->input('Component12');
        $we->Language = $request->input('Language');
        $we->save();
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
            $we = we::findOrfail($id);
            $we->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
