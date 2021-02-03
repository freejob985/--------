<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class works extends Model
{
    public $table = 'works';
    public $timestamps = false;
    protected $fillable = ['id', 'Image', 'Title', 'Section', 'Language'];

    public static function works_()
    {
        $locale = locale();
        $works = works::orderBy('id', 'DESC')->where('Language', $locale)->get();
        return $works;
    }
    public static function works_home()
    {
        $locale = locale();
        $works = works::orderBy('id', 'DESC')->where('Language', $locale)->get();
    }
}
