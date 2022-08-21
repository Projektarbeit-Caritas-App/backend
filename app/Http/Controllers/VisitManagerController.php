<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageVisitRequest;
use App\Models\Visit;
use App\Service\ModelFilterService;
use Illuminate\Http\Request;

/**
 * @group Visit
 * @authenticated
 */
class VisitManagerController extends Controller
{
    /**
     * List all Visits
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        // Query parameters
        $filters = $request->validate([
            // Card
            'card_id' => 'exists:cards,id|nullable',

            // User
            'user_id' => 'exists:users,id|nullable',

            // Sort by given field
            'sort' => 'string|in:id,card_id,user_id|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(Visit::query(), [
            'card_id' => 'match',
            'user_id' => 'match'
        ], $filters));
    }

    /**
     * Create new Visit
     *
     * @param \App\Http\Requests\ManageVisitRequest $request
     * @return \App\Models\Visit
     */
    public function store(ManageVisitRequest $request): Visit
    {
        return Visit::create($request->validated());
    }

    /**
     * Show specified Visit
     *
     * @param \App\Models\Visit $visit
     * @return \App\Models\Visit
     */
    public function show(Visit $visit): Visit
    {
        return $visit;
    }

    /**
     * Update specified Visit
     *
     * @param \App\Http\Requests\ManageVisitRequest $request
     * @param \App\Models\Visit $visit
     * @return \App\Models\Visit
     */
    public function update(ManageVisitRequest $request, Visit $visit): Visit
    {
        $visit->update($request->validated());
        return $visit;
    }

    /**
     * Delete specified Visit
     *
     * @param \App\Models\Visit $visit
     * @return array
     */
    public function destroy(Visit $visit): array
    {
        return ['success' => $visit->delete()];
    }
}
