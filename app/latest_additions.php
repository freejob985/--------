<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class latest_additions extends Model
{
    public $table = 'latest_additions';
    public $timestamps = false;
    protected $fillable = ['id', 'Subject', 'Calcinosis', 'user'];
}
