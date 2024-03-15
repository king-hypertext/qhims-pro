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
}
