<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\skills;
use Illuminate\Http\Request;
use Validator;

class skillsController extends Controller
{
    private $Path_pictures = "/";
    public $db = "skills";
    public $route = "skills";
    public $route_up = "skills";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $skills = skills::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/609/609129.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/skills/create ";
        $Columns = array();
        $Columns[] = 'Skill';
        $Columns[] = 'Rating';
        $Columns[] = 'Language';
        return view('Back.Tables.skills.Presentation', compact('skills', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.skills.addition');

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
            'Skill' => 'required',
            'Rating' => 'required',
            'Language' => 'required',
        ], [
            'Skill.required' => ' The data field is required',
            'Rating.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $skills = new skills();
        $skills->Skill = $request->input('Skill');
        $skills->Rating = $request->input('Rating')."%";
        $skills->Language = $request->input('Language');
        $skills->save();
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
        $skills = skills::findOrFail($id);
        return view('Back.Tables.skills.Modification')->with(compact('skills', 'path'));
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
        $skills = skills::findOrFail($id);
        return view('Back.Tables.skills.Modification')->with(compact('skills', 'path'));
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
            'Skill' => 'required',
            'Rating' => 'required',
            'Language' => 'required',
        ], [
            'Skill.required' => ' The data field is required',
            'Rating.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $skills = skills::findOrfail($id);
        $skills->Skill = $request->input('Skill');
        $skills->Rating = $request->input('Rating')."%";
        $skills->Language = $request->input('Language');
        $skills->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            $skills = skills::findOrfail($id);
            $skills->destroy($id);
        
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
