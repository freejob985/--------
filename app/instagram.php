<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instagram extends Model
{
    public $table = 'instagram';
    public $timestamps = false;
    protected $fillable = ['id', 'Image', 'created_at', 'updated_at'];
}
