<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageCardRequest;
use App\Models\Card;
use App\Models\Instance;
use App\Service\ModelFilterService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @group Card
 * @authenticated
 */
class CardManagerController extends Controller
{
    /**
     * List all Cards
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        // Query parameters
        $filters = $request->validate([
            // Last name contains
            'last_name' => 'string|nullable',

            // First name contains
            'first_name' => 'string|nullable',

            // Street contains
            'street' => 'string|nullable',

            // Postcode contains
            'postcode' => 'string|nullable',

            // City contains
            'city' => 'string|nullable',

            // Valid from is after this date
            'valid_from.0' => 'date|nullable',

            // Valid from is before this date
            'valid_from.1' => 'date|required_with:valid_from.0',

            // Valid until is after this date
            'valid_until.0' => 'date|nullable',

            // Valid until is before this date
            'valid_until.1' => 'date|required_with:valid_until.0',

            // Created by user_id
            'creator_id' => 'exists:users,id|nullable',

            // Sort by given field
            'sort' => 'string|in:id,last_name,first_name,street,postcode,city,valid_from,valid_until,creator_id|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(Card::where('instance_id', $request->user()->instance_id), [
            'last_name' => 'contains',
            'first_name' => 'contains',
            'street' => 'contains',
            'postcode' => 'contains',
            'city' => 'contains',
            'valid_from' => 'range',
            'valid_until' => 'range',
            'creator_id' => 'match'
        ], $filters));
    }

    /**
     * Create new Card
     *
     * @param \App\Http\Requests\ManageCardRequest $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(ManageCardRequest $request): Model
    {
        $instance = Instance::find($request->user()->instance_id);
        return $instance->cards()->create($request->validated());
    }

    /**
     * Show specified Card
     *
     * @param \App\Models\Card $card
     * @return \App\Models\Card
     */
    public function show(Card $card): Card
    {
        return $card;
    }

    /**
     * Update specified Card
     *
     * @param \App\Http\Requests\ManageCardRequest $request
     * @param \App\Models\Card $card
     * @return \App\Models\Card
     */
    public function update(ManageCardRequest $request, Card $card): Card
    {
        $card->update($request->validated());
        return $card;
    }

    /**
     * Delete specified Card
     *
     * @param \App\Models\Card $card
     * @return array
     */
    public function destroy(Card $card): array
    {
        return ['success' => $card->delete()];
    }
}
