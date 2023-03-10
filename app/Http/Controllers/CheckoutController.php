<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Card;
use App\Models\Instance;
use App\Models\Person;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;

/**
 * @group Checkout
 * @authenticated
 */
class CheckoutController extends Controller
{
    /**
     * Show specified Card and related Persons
     *
     * <small class="badge badge-purple">App authorization available</small>
     *
     * Endpoint shows the specified card, the associated people and the limitation_state.
     * The limitation_state shows for the persons the limit for a productType and how
     * many of them have already been used by a person
     *
     * @response status=200 {
     *   "card": {
     *     "id": 1,
     *     "last_name": "Mustermann",
     *     "first_name": "Müller",
     *     "street": "Mühlenstraße 5",
     *     "postcode": "12345",
     *     "city": "Würzburg",
     *     "valid_from": "2022-01-01T00:00:00.000000Z",
     *     "valid_until": "2022-03-31T00:00:00.000000Z",
     *     "creator_id": 1,
     *     "comment": "Hallo Welt",
     *     "created_at": null,
     *     "updated_at": null
     *   },
     *   "persons": [
     *     {
     *       "id": 1,
     *       "gender": "male",
     *       "age": 18,
     *       "created_at": null,
     *       "updated_at": null,
     *       "limitation_states": [
     *         {
     *           "product_type": {
     *             "id": 1,
     *             "name": "t-shirt",
     *             "icon": "t-shirt icon"
     *           },
     *           "limit": 3,
     *           "used": 4
     *         }, {
     *           "product_type": {
     *             "id": 2,
     *             "name": "shoe",
     *             "icon": "shoe icon"
     *           },
     *           "limit": 5,
     *           "used": 0
     *         }, {
     *           "product_type": {
     *             "id": 3,
     *             "name": "sock",
     *             "icon": "sock icon"
     *           },
     *           "limit": 2,
     *           "used": 1
     *         }
     *       ]
     *     }, {
     *       "id": 2,
     *       "gender": "female",
     *       "age": 15,
     *       "created_at": null,
     *       "updated_at": null,
     *       "limitation_states": [
     *         {
     *           "product_type": {
     *             "id": 1,
     *             "name": "t-shirt",
     *             "icon": "t-shirt icon"
     *           },
     *           "limit": 3,
     *           "used": 0
     *         }, {
     *           "product_type": {
     *               "id": 2,
     *               "name": "shoe",
     *               "icon": "shoe icon"
     *           },
     *           "limit": 5,
     *           "used": 1
     *         }, {
     *           "product_type": {
     *             "id": 3,
     *             "name": "sock",
     *             "icon": "sock icon"
     *           },
     *           "limit": 2,
     *           "used": 0
     *         }
     *       ]
     *     }
     *   ]
     * }
     *
     * @param Card $card
     * @return Application|ResponseFactory|Response
     */
    public function show(Card $card): Response|Application|ResponseFactory
    {
        $now = Carbon::now();

        if ($now->lt($card->valid_from)) {
            return response([
                'message' => 'Card not yet valid',
                'card' => $card
            ], 423);
        }

        if ($now->gt($card->valid_until)) {
            return response([
                'message' => 'Card expired',
                'card' => $card
            ], 410);
        }

        $data = Card::with('people.lineItems', 'people.limitationSets.limitations.productType')->find($card->id);

        return response([
            'card' => $card,
            'persons' => $data->people->map(function ($person) {
                return [
                    'id' => $person->id,
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
     * Create new Visit, LineItems
     *
     * <small class="badge badge-purple">App authorization available</small>
     *
     * Endpoint creates a new Visit entry and stores the submitted lineItems
     *
     * @param \App\Http\Requests\CheckoutRequest $request
     * @param Card $card
     * @return Application|ResponseFactory|Response
     */
    public function store(CheckoutRequest $request, Card $card): Response|Application|ResponseFactory
    {
        $now = Carbon::now();

        if ($now->lt($card->valid_from)) {
            return response([
                'message' => 'Card not yet valid',
                'card' => $card
            ], 423);
        }

        if ($now->gt($card->valid_until)) {
            return response([
                'message' => 'Card expired',
                'card' => $card
            ], 410);
        }

        $instance = Instance::find($card->instance_id);

        $visit = $instance->visits()->create([
            'card_id' => $card->id,
            'user_id' => $request->user()->id
        ]);

        $lineItems = $request->validated()['lineItems'];

        foreach ($lineItems as $lineItem) {
            $amount = $lineItem['amount'];

            for ($i = 0; $i < $amount; $i++) {
                $instance->lineItems()->create([
                    'visit_id' => $visit->id,
                    'person_id' => $lineItem['person_id'],
                    'product_type_id' => $lineItem['product_type_id']
                ]);
            }
        }

        return response(null, 204);
    }

    /**
     * Add comment to card
     *
     * <small class="badge badge-purple">App authorization available</small>
     *
     * Allows the app to add a comment to the given card
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Card $card
     * @return \App\Models\Card
     */
    public function comment(Request $request, Card $card): Card
    {
        $validated = $request->validate([
            // Additional Comment for the card Example: Took an additional buggy for his newly born child
            'comment' => 'string|required'
        ]);

        $card->update($validated);
        return $card;
    }

    /**
     * Helper function to create limitation_states
     *
     * Returns information about productTypes,
     * the associated limit value and how many are already used up
     *
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

        uasort($states, function ($a, $b) {
            return strcmp($a['product_type']['name'], $b['product_type']['name']);
        });

        return array_values($states);
    }
}
