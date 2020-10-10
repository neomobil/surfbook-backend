<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function locations()
    {
        return $this->belongsToMany(Location::class, 'location_organization', 'location_id');
    }
}
