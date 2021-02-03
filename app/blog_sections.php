<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog_sections extends Model
{
    public $table = 'blog_sections';
    public $timestamps = false;
    protected $fillable = ['id', 'Section', 'Language'];
}
