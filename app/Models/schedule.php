<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;

    protected $fillable=[
        'courseID',
        'teacherID',
        'time',
        'day'
    ];

    public function teachers(){
        $this->hasMany(teacher::class);
    }
    public function courses(){
        $this->belongsTo(course::class);
    }
}
