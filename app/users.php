<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public $table = 'users';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'email', 'email_verified_at', 'password', 'remember_token'];
}
