<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisitRequest;
use App\Models\Card;
use App\Models\Person;
use App\Models\Shop;
use App\Models\Visit;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class VisitController extends Controller
{
    /**
     * TODO description
     *
     * @param Card $card
     * @return Application|ResponseFactory|Response
     */
    public function show(Card $card): Response|Application|ResponseFactory
    {
        $data = Card::with('people.lineItems', 'people.limitationSets.limitations.productType')->find($card->id);

        return response([
            'card' => $card,
            'persons' => $data->people->map(function ($person) {
                return [
                    'gender' => $person->gender,
                    'age' => $person->age,
                    'created_at' => $person->created_at,
                    'updated_at' => $person->updated_at,
                    'limitation_states' => $this->generateLimitationStates($person)
                ];
            })
        ], 200);
    }

    /**
     * TODO Description
     *
     * @param \App\Http\Requests\VisitRequest $request
     * @param Shop $shop
     * @param Card $card
     * @return Application|ResponseFactory|Response
     */
    public function store(VisitRequest $request, Card $card): Response|Application|ResponseFactory
    {
        $visit = new Visit();
        $visit->card_id = $card->id;
        $visit->user_id = $request->user()->id;
        $visit->save();

        $items = $request->json('lineItems');

        foreach ($items as $lineItem) {
            $amount = $lineItem['amount'];

            for ($i = 0; $i < $amount; $i++) {
                $visit->lineItems()->create([
                    'person_id' => $lineItem['person_id'],
                    'product_type_id' => $lineItem['product_type_id']
                ]);
            }
        }

        return response(null, 204);
    }

    /**
     * @param Person $person
     * @return array
     */
    private function generateLimitationStates(Person $person): array
    {
        $states = [];

        foreach ($person->limitationSets as $limitationSet) {
            foreach ($limitationSet->limitations as $limitation) {
                if (
                    array_key_exists($limitation->product_type_id, $states) &&
                    $limitation->limit <= $states[$limitation->product_type_id]['limit']
                ) {
                    continue;
                }

                $states[$limitation->product_type_id] = [
                    'product_type' => [
                        'id' => $limitation->productType->id,
                        'name' => $limitation->productType->name,
                        'icon' => $limitation->productType->icon
                    ],
                    'limit' => $limitation->limit,
                    'used' => 0
                ];
            }
        }

        foreach ($person->lineItems as $lineItem) {
            if (!array_key_exists($lineItem->product_type_id, $states)) {
                continue;
            }

            $states[$lineItem->product_type_id]['used'] += 1;
        }

        return array_values($states);
    }
}