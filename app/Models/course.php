<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',

    ];

    public function schedules(){
        return $this->hasMany(schedule::class,'courseID');
    }

    function courseSelections(){
        return $this->hasMany(courseSelection::Class,'courseID');
    }
}
