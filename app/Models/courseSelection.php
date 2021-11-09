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
        $this->belongsTo(student::class);
    }

    public function course(){
        $this->belongsTo(course::class);
    }
}
