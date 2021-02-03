<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\services;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use Validator;


class servicesController extends Controller
{
    private $Path_pictures = "/Front/assets/img/services/";
    public $db = "Our Services ";
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
        $Settings[] = "We are here to help make things easier for you.        ";
        $Settings[] = 'https://image.flaticon.com/icons/svg/994/994285.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/Front/assets/img/services/";
        $Columns = array();
        $Columns[] = "الصورة";
        $Columns[] = "العنوان";
        $Columns[] = "العنوان الفرعي";
        $Columns[] = "اللغة";
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
            'Explanation' => 'required',
            'Image' => 'required',
            'Language' => 'required',
            'Topic' => 'required',
        ], [
            'Title.required' => ' The data field is required',
            'Explanation.required' => ' The data field is required',
            'Image.required' => ' The data field is required',
            'Language.required' => ' The data field is required',
            'Topic.required' => ' The data field is required',
        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        if (empty($request->input('Icon'))) {
            $Icon_file = Up_ِADD($request, 46, 46, $this->Path_pictures, "icon_img", "services_icon_");
            $all= $request->input('Request').$this->Path_pictures. $Icon_file;
            $Icon = "<img src='$all'  alt='Cinque Terre'>";
        } else {
            $Icon =" <i class='".$request->input('Icon')."'></i>";
        }
        $services = new services();
        $services->Title = $request->input('Title');
        $services->Icon = $Icon;
        $services->Explanation = $request->input('Explanation');
        $services->Topic = $request->input('Topic');
        $services->img = Up_ِADD($request, 850, 600, $this->Path_pictures, "Image", "services_");
        $services->Language = $request->input('Language');
        $services->save();
        latest_additions("الخدمات");
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
            'Explanation' => 'required',
            'Language' => 'required',
        ], [
            'Title.required' => ' The data field is required',
            'Explanation.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if (empty($request->input('Icon'))) {
            $Icon_file = Up_ِADD($request, 46, 46, $this->Path_pictures, "icon_img", "services_icon_");
            $all= $request->input('Request').$this->Path_pictures. $Icon_file;
            $Icon = "<img src='$all'  alt='Cinque Terre'>";
        } else {
            $Icon =" <i class='".$request->input('Icon')."'></i>";
        }
        $services = services::findOrfail($id);
        $services->Title = $request->input('Title');
        $services->Icon = $Icon;
        $services->Explanation = $request->input('Explanation');
        $services->Topic = $request->input('Topic');
        $services->img = UP_EX($request, 850, 600, $this->Path_pictures, $services->img, "Image", "DR");
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
