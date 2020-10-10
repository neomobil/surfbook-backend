<?php

namespace App\Http\Controllers;

use App\Http\Resources\LocationResourceCollection;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * @return LocationResourceCollection
     */
    public function index(): LocationResourceCollection
    {
        return new LocationResourceCollection(Location::paginate());
    }
}
