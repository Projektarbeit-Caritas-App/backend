<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageLimitationRequest;
use App\Models\Limitation;

/**
 * @group Limitation
 * @authenticated
 */
class LimitationManagerController extends Controller
{
    /**
     * List all Limitation
     *
     * @response status=200
     * [
     *  {
     *      "id": 1,
     *      "product_type_id": 1,
     *      "limitation_set_id": 1,
     *      "limit": 3,
     *      "created_at": "2022-08-16T16:32:23.000000Z",
     *      "updated_at": "2022-08-16T16:32:23.000000Z"
     *  },
     *  {
     *      "id": 3,
     *      "product_type_id": 2,
     *      "limitation_set_id": 2,
     *      "limit": 5,
     *      "created_at": "2022-08-16T16:32:23.000000Z",
     *      "updated_at": "2022-08-16T16:32:23.000000Z"
     *  },
     *  {
     *      "id": 4,
     *      "product_type_id": 2,
     *      "limitation_set_id": 1,
     *      "limit": 5,
     *      "created_at": "2022-08-16T16:32:23.000000Z",
     *      "updated_at": "2022-08-16T16:32:23.000000Z"
     *  },
     *  {
     *      "id": 5,
     *      "product_type_id": 3,
     *      "limitation_set_id": 1,
     *      "limit": 2,
     *      "created_at": "2022-08-16T16:32:23.000000Z",
     *      "updated_at": "2022-08-16T16:32:23.000000Z"
     *  }
     * ]
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Limitation::all();
    }

    /**
     * Create new Limitation
     *
     * @param \App\Http\Requests\ManageLimitationRequest $request
     * @return \App\Models\Limitation
     */
    public function store(ManageLimitationRequest $request)
    {
        return Limitation::create($request->validated());
    }

    /**
     * Show specified Limitation
     *
     * @response status=200
     * {
     *      "id": 1,
     *      "product_type_id": 1,
     *      "limitation_set_id": 1,
     *      "limit": 3,
     *      "created_at": "2022-08-16T16:32:23.000000Z",
     *      "updated_at": "2022-08-16T16:32:23.000000Z"
     * }
     *
     * @param \App\Models\Limitation $limitation
     * @return \App\Models\Limitation
     */
    public function show(Limitation $limitation)
    {
        return $limitation;
    }

    /**
     * Update specified Limitation
     *
     * @param \App\Http\Requests\ManageLimitationRequest $request
     * @param \App\Models\Limitation $limitation
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
     * @response status=200
     * {
     *  "success": true
     * }
     *
     * @param \App\Models\Limitation $limitation
     * @return array
     */
    public function destroy(Limitation $limitation)
    {
        return ['success' => $limitation->delete()];
    }
}
