<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hospital extends Model
{
    protected $fillable =  ['name', 'description', 'address'];

    public function Doctor():HasMany{
        return $this->hasMany(Doctor::class,'hospital_id', 'id' );
    }
}
