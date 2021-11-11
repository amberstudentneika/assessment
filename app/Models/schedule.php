<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;

    protected $fillable=[
        'courseID',
        'teacher_ID',
        'day',
        'start',
        'end',
    ];

    public function teacher(){
        return $this->belongsTo(teacher::class,'teacher_ID');
    }
    public function course(){
        return $this->belongsTo(course::class,'courseID');
    }
}
