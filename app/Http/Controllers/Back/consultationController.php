<?php

namespace App\Http\Controllers\back;

use App\consultation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class consultationController extends Controller
{
    private $Path_pictures = "/Front/papers/";
    public $db = "Book Online consultation ";
    public $route = "consultation";
    public $route_up = "consultation";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $consultation = consultation::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/1239/1239663.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "50";
        $Settings[] = "/Front/papers/";
        $Columns = array();
        $Columns[] = "papers";
        $Columns[] = "Name";
        $Columns[] = "complain";
        $Columns[] = "request";
        return view('Back.Tables.consultation.Presentation', compact('consultation', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.consultation.addition');

    }

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
    public function show($id)
    {
        $path = $this->Path_pictures;
        $services = consultation::findOrFail($id);
        return view('Back.Tables.consultation.Modification')->with(compact('consultation', 'path'));
    }

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
        if (DelFilePath($this->Path_pictures, $img) == true) {
            $consultation = consultation::findOrfail($id);
            $consultation->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
