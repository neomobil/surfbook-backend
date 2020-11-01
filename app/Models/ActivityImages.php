<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityImages extends Model
{
    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }
}
