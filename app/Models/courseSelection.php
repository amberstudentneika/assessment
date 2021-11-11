<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseSelection extends Model
{
    use HasFactory;

    protected $fillable=[
        'studentID',
        'courseID'
    ];

    public function student(){
        return $this->belongsTo(student::class,'studentID');
    }

    public function course(){
        return $this->belongsTo(course::class,'courseID');
    }
}
