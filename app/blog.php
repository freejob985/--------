<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public $table = 'blog';
    public $timestamps = false;
    protected $fillable = ['id', 'Image', 'Title', 'Section', 'tag', 'Date', 'Author'];

    public static function blog_()
    {
        $locale = locale();
        $blog = blog::take(3)->orderBy('id', 'DESC')->where('Language', $locale)->get();
        return $blog;
    }


    public function scopeWhereLike($query, $column, $value)
    {
        return $query->where($column, 'like', '%'.$value.'%');
    }
    
    public function scopeOrWhereLike($query, $column, $value)
    {
        return $query->orWhere($column, 'like', '%'.$value.'%');
    }



    

}
