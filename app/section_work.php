<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section_work extends Model
{
    public $table = 'section_work';
    public $timestamps = false;
    protected $fillable = ['id', 'Section', 'slug', 'Language'];
    public static function section_work_()
    {
        $locale = locale();
        $section_work = section_work::take(3)->orderBy('id', 'DESC')->where('Language', $locale)->get();
        return $section_work;
    }

}
