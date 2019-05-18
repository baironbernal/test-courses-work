<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeCourse extends Model
{

    protected $fillable = ["name"];

    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }
}
