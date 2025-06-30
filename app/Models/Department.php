<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    //
    public function DoctorProfile(): HasMany
    {
        return $this->hasMany(DoctorProfile::class,'department_id', 'id');
    }
}
