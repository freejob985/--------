<?php

namespace App\Http\Controllers\back;

use App\clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class clientsController extends Controller
{
    private $Path_pictures = "/Front/assets/img/client-image/";
    public $db = "Feedback";
    public $route = "clients";
    public $route_up = "clients";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = clients::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "Our Happy Clients Says About Us        ";
        $Settings[] = 'https://www.flaticon.com/premium-icon/icons/svg/1921/1921161.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "90";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "الصورة";
        $Columns[] = "الاسم";
        $Columns[] = "الوظيفة";
        $Columns[] = "اللغة";
        return view('Back.Tables.clients.Presentation', compact('clients', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.clients.addition');

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
            'Name' => 'required',
            'Function' => 'required',
            'comment' => 'required',
            'Language' => 'required',
        ], [
            'Image.required' => ' The data field is required',
            'Name.required' => ' The data field is required',
            'Function.required' => ' The data field is required',
            'comment.required' => ' The data field is required',
            'Language.required' => ' The data field is required',
        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $clients = new clients();
        $clients->Image =  Upload($request, 95, 95, $this->Path_pictures);
        $clients->Name = $request->input('Name');
        $clients->Function = $request->input('Function');
        $clients->comment = $request->input('comment');
        $clients->Language = $request->input('Language');
        $clients->save();
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
        $services = clients::findOrFail($id);
        return view('Back.Tables.clients.Modification')->with(compact('clients', 'path'));
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
        $clients = clients::findOrFail($id);
        return view('Back.Tables.clients.Modification')->with(compact('clients', 'path'));
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
            'Name' => 'required',
            'Function' => 'required',
            'comment' => 'required',
            'Language' => 'required',
        ], [
            'Name.required' => ' The data field is required',
            'Function.required' => ' The data field is required',
            'comment.required' => ' The data field is required',
            'Language.required' => ' The data field is required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $clients = clients::findOrfail($id);
        $clients->Image = Upload_($request, 95, 95, $this->Path_pictures,$clients->Image);
        $clients->Name = $request->input('Name');
        $clients->Function = $request->input('Function');
        $clients->comment = $request->input('comment');
        $clients->Language = $request->input('Language');
        $clients->save();
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
            $clients = clients::findOrfail($id);
            $clients->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
