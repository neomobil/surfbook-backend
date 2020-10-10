<?php

namespace App\Http\Controllers;


use App\Http\Resources\OrganizationResourceCollection;
use App\Models\Organization;

class OrganizationController extends Controller
{
    /**
     * @return OrganizationResourceCollection
     */
    public function index(): OrganizationResourceCollection
    {
        return new OrganizationResourceCollection(Organization::all());
    }
}
