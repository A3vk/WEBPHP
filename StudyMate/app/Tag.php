<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public function teachers()
    {
        return $this->belongsToMany(Test::class);
    }
}
