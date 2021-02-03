<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\latest_additions;
use Illuminate\Http\Request;
use Validator;

class latest_additionsController extends Controller
{
    private $Path_pictures = "/";
    public $db = "Latest additions";
    public $route = "latest_additions";
    public $route_up = "latest_additions";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $latest_additions = latest_additions::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "اخر الاضافات في لوحة التحكم";
        $Settings[] = 'https://www.flaticon.com/premium-icon/icons/svg/2096/2096821.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "Subject";
        $Columns[] = "user";
        $Columns[] = "Since";
        return view('Back.Tables.latest_additions.Presentation', compact('latest_additions', 'Settings', 'Columns'));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $img)
    {
      
            $latest_additions = latest_additions::findOrfail($id);
            $latest_additions->destroy($id);
      
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
