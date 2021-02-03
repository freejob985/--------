<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recent extends Model
{
    public $table = 'recent';
    public $timestamps = false;
    protected $fillable = ['id', 'Name', 'Section', 'Image', 'Explanation', 'Language'];
    public static function recent_()
    {
        $locale = locale();
        $recent = recent::orderBy('id', 'DESC')->where('Language', $locale)->get();
        $collection = collect($recent);
        $chunks = $collection->chunk(1);
        return   $chunks->toArray();
    }
}
