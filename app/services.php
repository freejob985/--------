<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    public $table = 'services';
    public $timestamps = false;
    protected $fillable = ['id', 'Title', 'Topic', 'Image', 'Language'];
    public static function services_()
    {
        $locale = locale();
        $services = services::orderBy('id', 'DESC')->where('Language', $locale)->get();
        return $services;
//======================

    }
}
