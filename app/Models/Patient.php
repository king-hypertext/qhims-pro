<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasUuids;
    use HasFactory;
    protected $table = 'patients';
    protected $keyType = 'string';
    public $incrementing = false;
    public function emergency_contact()
    {
        return $this->hasMany(EmergencyContact::class);
    }
    public function medical_reocords()
    {
        return $this->hasMany(PatientMedicalRecord::class);
    }
    public function bills()
    {
        return $this->hasMany(Bills::class);
    }
    public function doctor(){
        return $this->hasMany(Doctor::class);
    }
}
