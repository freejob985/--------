<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    public $table = 'customers';
    public $timestamps = false;
     protected $fillable = ['id', 'Image', 'Extension', 'created_at', 'updated_at'];


     public static function customers_()
     {
         $customers = customers::take(12)->orderBy('id', 'DESC')->get();
         return $customers;
     }

}
