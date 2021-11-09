<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable=[
        'studentID',
        'assignID'

    ];

    public function user(){
        $this->belongsTo(User::class);
    }
    public function courseSelection(){
        $this->hasMany(courseSelection::class);
    }
}
