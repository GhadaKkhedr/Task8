<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestModel extends User
{
    //
    protected $fillable = ['name', 'email', 'password'];
    protected $table = 'users';
}
