<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Encryptable;

class Type extends Model
{
    use Encryptable;

    protected $encryptable = [
        'name'
    ];

    public function modules(){
        return $this->hasMany(Test::class);
    }
}
