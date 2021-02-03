<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class opinions extends Model
{
    public $table = 'opinions';
    public $timestamps = false;
    protected $fillable = ['id', 'image', 'comment', 'Name', 'Job', 'Language'];

    public static function opinions_()
    {
        $locale = locale();
        $recent = opinions::orderBy('id', 'DESC')->where('Language', $locale)->get();
        return    $recent;
//======================
    
    }
    
}
