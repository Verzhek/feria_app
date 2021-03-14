<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombre"
    ];
    public $timestamps = false;
    public function users()
    {
        return $this->hasManyThrough(
            User::class,
            Visit::class,
            'stand_id',
            'id',
            'id',
            'user_id'
        );
    }
    public function visits()
    {
        return $this->hasMany(Visit::class, 'stand_id', 'id');
    }
}
