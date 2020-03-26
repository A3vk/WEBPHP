<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class)->withPivot('is_coordinator', 'is_my_teacher');
    }

    public function tests() 
    {
        return $this->hasMany(Test::class);
    }
}
