<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageCardRequest;
use App\Models\Card;

/**
 * @group Card
 * @authenticated
 */
class CardManagerController extends Controller
{
    /**
     * List all Cards
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Card::all();
    }

    /**
     * Create new Card
     *
     * @param \App\Http\Requests\ManageCardRequest $request
     * @return \App\Models\Card
     */
    public function store(ManageCardRequest $request)
    {
        return Card::create($request->validated());
    }

    /**
     * Show specified Card
     *
     * @param \App\Models\Card $card
     * @return \App\Models\Card
     */
    public function show(Card $card)
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
    public function update(ManageCardRequest $request, Card $card)
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
    public function destroy(Card $card)
    {
        return ['success' => $card->delete()];
    }
}
