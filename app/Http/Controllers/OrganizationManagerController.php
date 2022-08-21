<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageOrganizationRequest;
use App\Models\Organization;

/**
 * @group Organization
 * @authenticated
 */
class OrganizationManagerController extends Controller
{
    /**
     * List all Organization
     *
     * @response status=200
     * [
     *  {
     *      "id": 1,
     *      "instance_id": 1,
     *      "name": "test",
     *      "street": "abc",
     *      "postcode": "12345",
     *      "city": "abc",
     *      "contact": "abc",
     *      "created_at": "2022-08-15T17:23:12.000000Z",
     *      "updated_at": "2022-08-15T17:23:12.000000Z"
     *  },
     *  {
     *      "id": 2,
     *      "instance_id": 2,
     *      "name": "Instance",
     *      "street": "Street",
     *      "postcode": "Postcode",
     *      "city": "City",
     *      "contact": "Contact",
     *      "created_at": "2022-08-21T11:34:14.000000Z",
     *      "updated_at": "2022-08-21T11:34:14.000000Z"
     *  },
     *  {
     *      "id": 3,
     *      "instance_id": 3,
     *      "name": "Instance",
     *      "street": "Street",
     *      "postcode": "Postcode",
     *      "city": "City",
     *      "contact": "Contact",
     *      "created_at": "2022-08-21T11:34:55.000000Z",
     *      "updated_at": "2022-08-21T11:34:55.000000Z"
     *  }
     * ]
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Organization::all();
    }

    /**
     * Create new Organization
     *
     * @param \App\Http\Requests\ManageOrganizationRequest $request
     * @return \App\Models\Organization
     */
    public function store(ManageOrganizationRequest $request)
    {
        return Organization::create($request->validated());
    }

    /**
     * Show specified Organization
     *
     * @response status=200
     * {
     *      "id": 2,
     *      "instance_id": 2,
     *      "name": "Instance",
     *      "street": "Street",
     *      "postcode": "Postcode",
     *      "city": "City",
     *      "contact": "Contact",
     *      "created_at": "2022-08-21T11:34:14.000000Z",
     *      "updated_at": "2022-08-21T11:34:14.000000Z"
     *  }
     *
     * @param \App\Models\Organization $organization
     * @return \App\Models\Organization
     */
    public function show(Organization $organization)
    {
        return $organization;
    }

    /**
     * Update specified Organization
     *
     * @param \App\Http\Requests\ManageOrganizationRequest $request
     * @param \App\Models\Organization $organization
     * @return \App\Models\Organization
     */
    public function update(ManageOrganizationRequest $request, Organization $organization)
    {
        $organization->update($request->validated());
        return $organization;
    }

    /**
     * Delete specified Organization
     *
     * @response status=200
     * {
     *  "success": true
     * }
     *
     * @param \App\Models\Organization $organization
     * @return array
     */
    public function destroy(Organization $organization)
    {
        return ['success' => $organization->delete()];
    }
}
