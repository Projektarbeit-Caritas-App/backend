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
     * @param  \App\Models\LimitationSet  $limitationSet
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
     * @param  \App\Models\LimitationSet  $limitationSet
     * @return array
     */
    public function destroy(LimitationSet $limitationSet)
    {
        return ['success' => $limitationSet->delete()];
    }
}
