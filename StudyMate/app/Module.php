<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Encryptable;

class Module extends Model
{
    use Encryptable;

    protected $fillable = [
        'name',
        'period',
        'block',
        'total_credits',
        'obtained_credits',
        'grade'
    ];

    protected $encryptable = [
        'name',
        'period',
        'block',
        'total_credits',
        'obtained_credits',
        'grade'
    ];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class)->withPivot('is_coordinator', 'is_my_teacher');
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }
}
