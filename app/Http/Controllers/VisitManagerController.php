<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageVisitRequest;
use App\Models\Visit;

/**
 * @group Visit
 * @authenticated
 */
class VisitManagerController extends Controller
{
    /**
     * List all Visits
     *
     * @response status=200
     * [
     *  {
     *      "id": 6,
     *      "card_id": 1,
     *      "user_id": 1,
     *      "created_at": "2022-08-16T16:32:52.000000Z",
     *      "updated_at": "2022-08-16T16:32:52.000000Z"
     *  },
     *  {
     *      "id": 7,
     *      "card_id": 1,
     *      "user_id": 1,
     *      "created_at": "2022-08-17T13:52:35.000000Z",
     *      "updated_at": "2022-08-17T13:52:35.000000Z"
     *  },
     *  {
     *      "id": 8,
     *      "card_id": 1,
     *      "user_id": 3,
     *      "created_at": "2022-08-21T11:50:35.000000Z",
     *      "updated_at": "2022-08-21T11:50:35.000000Z"
     *  }
     * ]
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Visit::all();
    }

    /**
     * Create new Visit
     *
     * @param \App\Http\Requests\ManageVisitRequest $request
     * @return \App\Models\Visit
     */
    public function store(ManageVisitRequest $request)
    {
        return Visit::create($request->validated());
    }

    /**
     * Show specified Visit
     *
     * @response status=200
     * {
     *      "id": 6,
     *      "card_id": 1,
     *      "user_id": 1,
     *      "created_at": "2022-08-16T16:32:52.000000Z",
     *      "updated_at": "2022-08-16T16:32:52.000000Z"
     * }
     *
     * @param \App\Models\Visit $visit
     * @return \App\Models\Visit
     */
    public function show(Visit $visit)
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
    public function update(ManageVisitRequest $request, Visit $visit)
    {
        $visit->update($request->validated());
        return $visit;
    }

    /**
     * Delete specified Visit
     *
     * @response status=200
     * {
     *  "success": true
     * }
     *
     * @param \App\Models\Visit $visit
     * @return array
     */
    public function destroy(Visit $visit)
    {
        return ['success' => $visit->delete()];
    }
}
