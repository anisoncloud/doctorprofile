<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoctorProfile extends Model
{
    //
    public function Department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
