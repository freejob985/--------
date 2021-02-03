<?php

namespace App;

use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class component extends Model
{
    public $table = 'component';
    public $timestamps = false;
    protected $fillable = ['id', 'Component1', 'Component2', 'Component3', 'Component4', 'Component5', 'Component6', 'Component7', 'Component8', 'Component9', 'Component10', 'Component11', 'Component12', 'Component13', 'Component14', 'Component15', 'Component16', 'Component17', 'Component18', 'Component19', 'Component20', 'Component21', 'Component22', 'Component23', 'Component24', 'Component25', 'Component26', 'Component27', 'Component28', 'Component29', 'pag', 'Language'];


    public static function component__()
    {
        $component = array();
        if (Session::get('locale') == "en") {
            $component['Index'] = DB::table('component')->get()->where('id', 1)->first();
            $component['about'] = DB::table('component')->get()->where('id', 2)->first();
            $component['services'] = DB::table('component')->get()->where('id', 3)->first();
            $component['portfolio'] = DB::table('component')->get()->where('id', 4)->first();
            $component['blog'] = DB::table('component')->get()->where('id', 5)->first();
            $component['contact'] = DB::table('component')->get()->where('id', 6)->first();
        } else {
            $component['Index'] = DB::table('component')->get()->where('id', 7)->first();
            $component['about'] = DB::table('component')->get()->where('id', 8)->first();
            $component['services'] = DB::table('component')->get()->where('id', 9)->first();
            $component['portfolio'] = DB::table('component')->get()->where('id', 10)->first();
            $component['blog'] = DB::table('component')->get()->where('id', 11)->first();
            $component['contact'] = DB::table('component')->get()->where('id', 12)->first();
        }

        return $component;
    }

}
