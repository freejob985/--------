<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    public $table = 'skills';
    public $timestamps = false;
    protected $fillable = ['id', 'Skill', 'Rating', 'Language'];
    public static function skills_()
    {
        $locale = locale();
        $skills = skills::orderBy('id', 'DESC')->where('Language', $locale)->get();
        return $skills;
    }
}
