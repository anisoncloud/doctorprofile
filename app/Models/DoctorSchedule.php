<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DoctorSchedule extends Model
{
    protected $fillable = [
        'doctor_id',
        'sunday',
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday'

    ];

    public function Doctor() : HasMany
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }
}
