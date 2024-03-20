<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    use HasFactory;
    protected $table = 'emergency_contacts';
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
