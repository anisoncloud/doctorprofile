<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Doctor extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'department_id',
        'hospital_id'
    ];
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
    public function hospital(): BelongsTo
    {
        return $this->belongsTo(Hospital::class, 'hospital_id', 'id');
    }
    public function DoctorSchedule(): BelongsTo
    {
        return $this->belongsTo(DoctorSchedule::class, 'doctor_id', 'id');
    }
}
