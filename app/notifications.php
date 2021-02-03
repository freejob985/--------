<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notifications extends Model
{
    public $table = 'notifications';
    public $timestamps = false;
    protected $fillable = ['id', 'type', 'notifiable_type', 'notifiable_id', 'data', 'read_at'];
}
