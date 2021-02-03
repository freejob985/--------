<?php

namespace App\Http\Controllers\back;

use App\contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class contactController extends Controller
{
    private $Path_pictures = "/";
    public $db = "الاتصال ";
    public $route = "contact";
    public $route_up = "contact";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = contact::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/2539/2539048.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "الاسم";
        $Columns[] = "الاسم الأخير";
        $Columns[] = "البريد";
        $Columns[] = "الرسالة";
        return view('Back.Tables.contact.Presentation', compact('contact', 'Settings', 'Columns'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Name' => 'required',
            'Last' => 'required',
            'Mail' => 'required',
            'message' => 'required',

        ], [
            'Name.required' => ' The data field is required',
            'Last.required' => ' The data field is required',
            'Mail.required' => ' The data field is required',
            'message.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $contact = new contact();
        $contact->Name = $request->input('Name');
        $contact->Last = $request->input('Last');
        $contact->Mail = $request->input('Mail');
        $contact->message = $request->input('message');

        $contact->save();
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
        $services = contact::findOrFail($id);
        return view('Back.Tables.contact.Modification')->with(compact('contact', 'path'));
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
        $contact = contact::findOrFail($id);
        return view('Back.Tables.contact.Modification')->with(compact('contact', 'path'));
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
      //  dd($request->all());
        $validator = Validator::make($request->all(), [
            'Name' => 'required',
            'Last' => 'required',
            'Mail' => 'required',
            'message' => 'required',
        ], [
            'Name.required' => ' The data field is required',
            'Last.required' => ' The data field is required',
            'Mail.required' => ' The data field is required',
            'message.required' => ' The data field is required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $contact = contact::findOrfail($id);
        $contact->Name = $request->input('Name');
        $contact->Last = $request->input('Last');
        $contact->Mail = $request->input('Mail');
        $contact->message = $request->input('message');
        $contact->save();
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
        $contact = contact::findOrfail($id);
        $contact->destroy($id);
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
