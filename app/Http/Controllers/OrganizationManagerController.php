<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageOrganizationRequest;
use App\Models\Instance;
use App\Models\Organization;
use App\Service\ModelFilterService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @group Organization
 * @authenticated
 */
class OrganizationManagerController extends Controller
{
    /**
     * List all Organization
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        // Query parameters
        $filters = $request->validate([
            // Name contains
            'name' => 'string|nullable',

            // Street contains
            'street' => 'string|nullable',

            // Postcode contains
            'postcode' => 'string|nullable',

            // City contains
            'city' => 'string|nullable',

            // Contact contains
            'contact' => 'string|nullable',

            // Sort by given field
            'sort' => 'string|in:id,name,street,postcode,city,contact|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(Organization::where('instance_id', $request->user()->instance_id), [
            'name' => 'contains',
            'street' => 'contains',
            'postcode' => 'contains',
            'city' => 'contains',
            'contact' => 'contains'
        ], $filters));
    }

    /**
     * Create new Organization
     *
     * @param  \App\Http\Requests\ManageOrganizationRequest  $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(ManageOrganizationRequest $request): Model
    {
        $instance = Instance::find($request->user()->instance_id);
        return $instance->organizations()->create($request->validated());
    }

    /**
     * Show specified Organization
     *
     * @param  \App\Models\Organization  $organization
     * @return \App\Models\Organization
     */
    public function show(Organization $organization): Organization
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
    public function update(ManageOrganizationRequest $request, Organization $organization): Organization
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
    public function destroy(Organization $organization): array
    {
        return ['success' => $organization->delete()];
    }
}
