<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reques extends Model
{
    use HasFactory;
    public function department(){
        return this->belongsTo(department::class,'dep_id');
    }
}
