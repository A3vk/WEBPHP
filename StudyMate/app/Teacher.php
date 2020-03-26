<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    public function teachers()
    {
        return $this->belongsToMany(Module::class)->withPivot('is_coordinator', 'is_my_teacher');
    }
}
