<?php

namespace App\Http\Controllers\back;

use App\faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class faqController extends Controller
{
    private $Path_pictures = "/";
    public $db = "Frequently Asked Questions ";
    public $route = "faq";
    public $route_up = "faq";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faq = faq::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "Get Every Single Answers There if you want        ";
        $Settings[] = 'https://image.flaticon.com/icons/svg/900/900415.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "Question";
        $Columns[] = "Answer";
        $Columns[] = "Language";
        return view('Back.Tables.faq.Presentation', compact('faq', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.faq.addition');

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
            'Question' => 'required',
            'Answer' => 'required',
            'Language' => 'required',

        ], [
            'Question.required' => ' The data field is required',
            'Answer.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $faq = new faq();
        $faq->Question = $request->input('Question');
        $faq->Answer = $request->input('Answer');
        $faq->Language = $request->input('Language');
        $faq->save();
        latest_additions("الاسئلة الشائعة ");
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
        $services = faq::findOrFail($id);
        return view('Back.Tables.faq.Modification')->with(compact('faq', 'path'));
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
        $faq = faq::findOrFail($id);
        return view('Back.Tables.faq.Modification')->with(compact('faq', 'path'));
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
            'Question' => 'required',
            'Answer' => 'required',
            'Language' => 'required',

        ], [
            'Question.required' => ' The data field is required',
            'Answer.required' => ' The data field is required',
            'Language.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $faq = faq::findOrfail($id);
        $faq->Question = $request->input('Question');
        $faq->Answer = $request->input('Answer');
        $faq->Language = $request->input('Language');

        $faq->save();
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

        $faq = faq::findOrfail($id);
        $faq->destroy($id);
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
