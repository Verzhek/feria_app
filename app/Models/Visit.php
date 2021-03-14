<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    protected $fillable = [
        "stand_id",
        "user_id",
        "visit_time"
    ];
    public function stand(){
        return $this->hasOne(Stand::class,"id","stand_id");;
    }

    public function user(){
        return $this->hasOne(User::class,"id","user_id");;

    }

    public $timestamps=false;

}
