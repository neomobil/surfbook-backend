<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{

    /**
     * @return HasMany
     */
    public function activityImages(): HasMany
    {
        return $this->hasMany(ActivityImages::class);
    }
}
