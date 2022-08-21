<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageLimitationSetRequest;
use App\Models\LimitationSet;

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
     */
    public function index()
    {
        return LimitationSet::all();
    }

    /**
     * Create new LimitationSet
     *
     * @param \App\Http\Requests\ManageLimitationSetRequest $request
     * @return \App\Models\LimitationSet
     */
    public function store(ManageLimitationSetRequest $request)
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
    public function show(LimitationSet $limitationSet)
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
    public function update(ManageLimitationSetRequest $request, LimitationSet $limitationSet)
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
    public function destroy(LimitationSet $limitationSet)
    {
        return ['success' => $limitationSet->delete()];
    }
}
