<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageLimitationSetRequest;
use App\Models\LimitationSet;
use App\Service\ModelFilterService;
use Illuminate\Http\Request;

/**
 * @group Limitation Set
 * @authenticated
 */
class LimitationSetManagerController extends Controller
{
    /**
     * List all LimitationSets
     *
     * @response status=200
     * [
     *  {
     *      "id": 1,
     *      "name": "limitation_set 1",
     *      "valid_from": "1999-08-20 22:00:00",
     *      "valid_until": "2016-08-20 22:00:00",
     *      "created_at": "2022-08-16T16:32:23.000000Z",
     *      "updated_at": "2022-08-16T16:32:23.000000Z"
     *  },
     *  {
     *      "id": 2,
     *      "name": "limitation_set 2",
     *      "valid_from": "2020-02-14 00:00:00",
     *      "valid_until": "2021-05-17 00:00:00",
     *      "created_at": "2022-08-16T16:32:23.000000Z",
     *      "updated_at": "2022-08-16T16:32:23.000000Z"
     *  }
     * ]
     *
     * @return \Illuminate\Database\Eloquent\Collection
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        // Query parameters
        $filters = $request->validate([
            // Filter by name
            'name' => 'string|nullable',

            // Valid from is after this date
            'valid_from.0' => 'date|nullable',

            // Valid from is before this date
            'valid_from.1' => 'date|required_with:valid_from.0',

            // Valid until is after this date
            'valid_until.0' => 'date|nullable',

            // Valid until is before this date
            'valid_until.1' => 'date|required_with:valid_until.0',

            // Sort by given field
            'sort' => 'string|in:id,name,valid_from,valid_until|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(LimitationSet::query(), [
            'name' => 'contains',
            'valid_from' => 'range',
            'valid_until' => 'range'
        ], $filters));
    }

    /**
     * Create new LimitationSet
     *
     * @param \App\Http\Requests\ManageLimitationSetRequest $request
     * @return \App\Models\LimitationSet
     */
    public function store(ManageLimitationSetRequest $request): LimitationSet
    {
        return LimitationSet::create($request->validated());
    }

    /**
     * Show specified LimitationSet
     *
     * @response status=200
     * {
     *      "id": 1,
     *      "name": "limitation_set 1",
     *      "valid_from": "1999-08-20 22:00:00",
     *      "valid_until": "2016-08-20 22:00:00",
     *      "created_at": "2022-08-16T16:32:23.000000Z",
     *      "updated_at": "2022-08-16T16:32:23.000000Z"
     * }
     *
     * @param \App\Models\LimitationSet $limitationSet
     * @return \App\Models\LimitationSet
     */
    public function show(LimitationSet $limitationSet): LimitationSet
    {
        return $limitationSet;
    }

    /**
     * Update specified LimitationSet
     *
     * @param \App\Http\Requests\ManageLimitationSetRequest $request
     * @param \App\Models\LimitationSet $limitationSet
     * @return \App\Models\LimitationSet
     */
    public function update(ManageLimitationSetRequest $request, LimitationSet $limitationSet): LimitationSet
    {
        $limitationSet->update($request->validated());
        return $limitationSet;
    }

    /**
     * Delete specified LimitationSet
     *
     * @response status=200
     * {
     *  "success": true
     * }
     *
     * @param \App\Models\LimitationSet $limitationSet
     * @return array
     */
    public function destroy(LimitationSet $limitationSet): array
    {
        return ['success' => $limitationSet->delete()];
    }
}
