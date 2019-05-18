<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'duration',
        'type_course_id',
        'user_id', 
    ];

    public function typeCourse()
    {
        return $this->belongsTo('App\Models\TypeCourse');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
