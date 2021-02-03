<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    public $table = 'slide';
    public $timestamps = false;
    protected $fillable = ['id', 'Subject', 'Title', 'Sub', 'Additional', 'Link', 'Image', 'Language'];

    public static function slide_()
    {
        $locale = locale();
        $slide = slide::take(4)->orderBy('id', 'DESC')->where('Language', $locale)->get();
        return $slide;
    }

}
