<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function patient(){
        return $this->hasMany(Patient::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
