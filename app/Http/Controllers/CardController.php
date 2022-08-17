<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardRequest;
use App\Models\Card;

class CardController extends Controller
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
     * @param  \App\Http\Requests\CardRequest  $request
     * @return \App\Models\Card
     */
    public function store(CardRequest $request)
    {
        return Card::create($request->validated());
    }

    /**
     * Show specified Card
     *
     * @param  \App\Models\Card  $card
     * @return \App\Models\Card
     */
    public function show(Card $card)
    {
        return $card;
    }

    /**
     * Update specified Card
     *
     * @param  \App\Http\Requests\CardRequest  $request
     * @param  \App\Models\Card  $card
     * @return \App\Models\Card
     */
    public function update(CardRequest $request, Card $card)
    {
        $card->update($request->validated());
        return $card;
    }

    /**
     * Delete specified Card
     *
     * @param  \App\Models\Card  $card
     * @return array
     */
    public function destroy(Card $card)
    {
        return ['success' => $card->delete()];
    }
}
