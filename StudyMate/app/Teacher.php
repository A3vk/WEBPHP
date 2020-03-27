<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Encryptable;

class Teacher extends Model
{
    use Encryptable;

    protected $fillable = [
        'first_name',
        'last_name'
    ];

    protected $encryptable = [
        'first_name',
        'last_name'
    ];

    public function teachers()
    {
        return $this->belongsToMany(Module::class)->withPivot('is_coordinator', 'is_my_teacher');
    }

    public function fullName() {
        return $this->first_name . ' ' . $this->last_name;
    }
}
