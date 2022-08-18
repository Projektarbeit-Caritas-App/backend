<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageVisitRequest;
use App\Models\Visit;

class VisitManagerController extends Controller
{
    /**
     * List all Visits
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
     * @param \App\Models\Visit $visit
     * @return array
     */
    public function destroy(Visit $visit)
    {
        return ['success' => $visit->delete()];
    }
}
