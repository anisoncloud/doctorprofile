<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    //
    public function Doctor(): HasMany
    {
        return $this->hasMany(Doctor::class,'department_id', 'id');
    }
}
