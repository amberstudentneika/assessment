<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_ID'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_ID');
    }
    public function schedules(){
        return $this->hasMany(schedule::class,'teacher_ID');
    }
}
