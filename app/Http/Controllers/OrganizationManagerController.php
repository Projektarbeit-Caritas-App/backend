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
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Organization::all();
    }

    /**
     * Create new Organization
     *
     * @param  \App\Http\Requests\ManageOrganizationRequest  $request
     * @return \App\Models\Organization
     */
    public function store(ManageOrganizationRequest $request)
    {
        return Organization::create($request->validated());
    }

    /**
     * Show specified Organization
     *
     * @param  \App\Models\Organization  $organization
     * @return \App\Models\Organization
     */
    public function show(Organization $organization)
    {
        return $organization;
    }

    /**
     * Update specified Organization
     *
     * @param  \App\Http\Requests\ManageOrganizationRequest  $request
     * @param  \App\Models\Organization  $organization
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
     * @param  \App\Models\Organization  $organization
     * @return array
     */
    public function destroy(Organization $organization)
    {
        return ['success' => $organization->delete()];
    }
}
