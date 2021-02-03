<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;

class sub extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public static function component()
    {
        $component = array();

        if (Session::get('locale') == "en") {
            $component['Main_Services'] = DB::table('component')->get()->where('id', 2)->first();
            $component['About_Us'] = DB::table('component')->get()->where('id', 3)->first();
            $component['Our_Qualification'] = DB::table('component')->get()->where('id', 4)->first();
            $component['Our_Services'] = DB::table('component')->get()->where('id', 5)->first();
            $component['Feedback'] = DB::table('component')->get()->where('id', 6)->first();
            $component['Frequently_Asked_Questions'] = DB::table('component')->get()->where('id', 7)->first();
            $component['Our_Gallery'] = DB::table('component')->get()->where('id', 8)->first();
            $component['News_Blog'] = DB::table('component')->get()->where('id', 9)->first();
        } else {
            $component['Main_Services'] = DB::table('component')->get()->where('id', 14)->first();
            $component['About_Us'] = DB::table('component')->get()->where('id', 15)->first();
            $component['Our_Qualification'] = DB::table('component')->get()->where('id', 16)->first();
            $component['Our_Services'] = DB::table('component')->get()->where('id', 17)->first();
            $component['Feedback'] = DB::table('component')->get()->where('id', 18)->first();
            $component['Frequently_Asked_Questions'] = DB::table('component')->get()->where('id', 19)->first();
            $component['Our_Gallery'] = DB::table('component')->get()->where('id', 20)->first();
            $component['News_Blog'] = DB::table('component')->get()->where('id', 21)->first();
        }

        return $component;
    }

    public static function component_about()
    {
        $component = array();
        if (Session::get('locale') == "en") {
            $component['About_Us'] = DB::table('component')->get()->where('id', 3)->first();
            $component['Frequently_Asked_Questions'] = DB::table('component')->get()->where('id', 7)->first();
            $component['Feedback'] = DB::table('component')->get()->where('id', 6)->first();
            $component['MySelf'] = DB::table('component')->get()->where('id', 10)->first();
            $component['MySkills'] = DB::table('component')->get()->where('id', 11)->first();
            $component['MyEducation'] = DB::table('component')->get()->where('id', 12)->first();
        } else {
            $component['About_Us'] = DB::table('component')->get()->where('id', 15)->first();
            $component['Frequently_Asked_Questions'] = DB::table('component')->get()->where('id', 19)->first();
            $component['Feedback'] = DB::table('component')->get()->where('id', 18)->first();
            $component['MySelf'] = DB::table('component')->get()->where('id', 22)->first();
            $component['MySkills'] = DB::table('component')->get()->where('id', 23)->first();
            $component['MyEducation'] = DB::table('component')->get()->where('id', 24)->first();
        }

        return $component;
    }

    public static function component_contact()
    {
        $component = array();
        if (Session::get('locale') == "en") {
            $component = component::where('id', 1)->get();
        } else {
            $component = component::where('id', 13)->get();
        }
        return $component;
    }

}
