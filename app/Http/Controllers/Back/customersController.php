<?php

namespace App\Http\Controllers\back;

use App\customers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class customersController extends Controller
{
    private $Path_pictures = "/front/assets/images/clients/";
    public $db = "Our Customers";
    public $route = "customers";
    public $route_up = "customers";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = customers::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/2534/2534196.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "150";
        $Settings[] = "/admin/customers/create ";
        $Columns = array();
        $Columns[] = 'Image';
        $Columns[] = 'Extension';
        return view('Back.Tables.customers.Presentation', compact('customers', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.customers.addition');

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
            'Extension' => 'required',
        ], [
            'Image.required' => ' The data field is required',
            'Extension.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $customers = new customers();
        $customers->Image = Up_ِADD($request, 200, 200, $this->Path_pictures, "Image", "_Image_");
        $customers->Extension = Up_ِADD($request, 200, 200, $this->Path_pictures, "Extension", "_Extension_");
        $customers->save();
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
        $customers = customers::findOrFail($id);
        return view('Back.Tables.customers.Modification')->with(compact('customers', 'path'));
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
        $customers = customers::findOrFail($id);
        return view('Back.Tables.customers.Modification')->with(compact('customers', 'path'));
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

        $customers = customers::findOrfail($id);
        $customers->Image = UP_EX($request, 200, 200, $this->Path_pictures, $customers->Image, "Image", "_Image_");
        $customers->Extension = UP_EX($request, 200, 200, $this->Path_pictures, $customers->Extension, "Extension", "_Extension_");
        $customers->save();
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
            $customers = customers::findOrfail($id);
            $customers->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
