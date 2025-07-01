<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
    public function Department(): HasOne
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }
    public function Hospital(): HasOne
    {
        return $this->hasOne(Hospital::class, 'id', 'hospital_id');
    }
}
