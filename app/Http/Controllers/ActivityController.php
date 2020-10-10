<?php

namespace App\Http\Controllers;

use App\Http\Resources\ActivityResourceCollection;
use App\Models\Activity;

class ActivityController extends Controller
{

    /**
     * @return ActivityResourceCollection
     */
    public function index(): ActivityResourceCollection
    {
        return new ActivityResourceCollection(Activity::all());
    }
}
