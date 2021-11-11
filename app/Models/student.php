<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable=[
        'userID',
        'assignID'

    ];

    public function user(){
        return $this->belongsTo(User::class,'userID');
    }
    public function courseSelections(){
        return $this->hasMany(courseSelection::class,'studentID');
    }

}
