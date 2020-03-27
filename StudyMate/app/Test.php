<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'type_id',
        'module_id',
        'name',
        'grade',
        'date',
        'is_complete'
    ];

    //
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
