<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageLimitationRequest;
use App\Models\Limitation;
use App\Service\ModelFilterService;
use Illuminate\Http\Request;

/**
 * @group Limitation
 * @authenticated
 */
class LimitationManagerController extends Controller
{
    /**
     * List all Limitation
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        // Query parameters
        $filters = $request->validate([
            // Limitation Set
            'limitation_set_id' => 'exists:limitation_sets,id|nullable',

            // Product Type
            'product_type_id' => 'exists:product_types,id|nullable',

            // Sort by given field
            'sort' => 'string|in:id,limitation_set_id,product_type_id,limit|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(Limitation::query(), [
            'limitation_set_id' => 'match',
            'product_type_id' => 'match'
        ], $filters));
    }

    /**
     * Create new Limitation
     *
     * @param  \App\Http\Requests\ManageLimitationRequest  $request
     * @return \App\Models\Limitation
     */
    public function store(ManageLimitationRequest $request)
    {
        return Limitation::create($request->validated());
    }

    /**
     * Show specified Limitation
     *
     * @param  \App\Models\Limitation  $limitation
     * @return \App\Models\Limitation
     */
    public function show(Limitation $limitation)
    {
        return $limitation;
    }

    /**
     * Update specified Limitation
     *
     * @param  \App\Http\Requests\ManageLimitationRequest $request
     * @param  \App\Models\Limitation  $limitation
     * @return \App\Models\Limitation
     */
    public function update(ManageLimitationRequest $request, Limitation $limitation)
    {
        $limitation->update($request->validated());
        return $limitation;
    }

    /**
     * Delete specified Limitation
     *
     * @param  \App\Models\Limitation  $limitation
     * @return array
     */
    public function destroy(Limitation $limitation)
    {
        return ['success' => $limitation->delete()];
    }
}
