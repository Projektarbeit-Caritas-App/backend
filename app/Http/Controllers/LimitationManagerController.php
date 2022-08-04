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
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Limitation::all();
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
