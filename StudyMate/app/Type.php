<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //

    public function modules(){
        return $this->hasMany(Test::class);
    }
}
