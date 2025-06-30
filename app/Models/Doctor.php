<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Doctor extends Model
{
    //
    public function Department(): HasOne
    {
        return $this->hasOne(Doctor::class, 'department_id', 'id');
    }
}
