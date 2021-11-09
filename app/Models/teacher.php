<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    protected $fillable=[
'scheduleID',
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
    public function schedule(){
        $this->belongsTo(schedule::class);
    }
}
