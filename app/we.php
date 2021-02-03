<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class we extends Model
{
    public $table = 'we';
    public $timestamps = false;
     protected $fillable = ['id', 'Component1', 'Component2', 'Component3', 'Component4', 'Component5', 'Component6', 'Component7', 'Component8', 'Component9', 'Component10', 'Component11', 'Component12', 'Component13', 'Component14', 'Component15', 'Component16', 'Component17', 'Component18', 'Component19', 'Component20', 'Component21', 'Component22', 'Component23', 'Component24', 'pag', 'Language' ];
    
     public static function we_()
     {
         $locale = locale();
         $we = we::orderBy('id', 'DESC')->where('Language', $locale)->get();
         return    $we;
 //======================
     
     }




}
