<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Encryptable;


class Test extends Model
{
    use Encryptable;
    
    protected $fillable = [
        'type_id',
        'module_id',
        'name',
        'grade',
        'date',
        'is_complete'
    ];

    protected $encryptable = [
        'name',
        'file',
        'grade',
        'date',
    ];

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
