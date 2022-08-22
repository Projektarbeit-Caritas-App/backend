<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManagePersonRequest;
use App\Models\Instance;
use App\Models\Person;
use App\Service\ModelFilterService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @group Person
 * @authenticated
 */
class PersonManagerController extends Controller
{
    /**
     * List all persons
     *
     * @response status=200 {
     *   "items": [
     *     {
     *       "id": 1,
     *       "card_id": 1,
     *       "gender": "male",
     *       "age": 18,
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }, {
     *       "id": 2,
     *       "card_id": 1,
     *       "gender": "female",
     *       "age": 15,
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }, {
     *       "id": 3,
     *       "card_id": 49394739894111,
     *       "gender": "male",
     *       "age": 23,
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }
     *   ],
     *   "meta": {
     *     "current_page": 1,
     *     "last_page": 1,
     *     "per_page": 25,
     *     "item_count": 3
     *   },
     *   "links": {
     *     "prev_page_url": null,
     *     "next_page_url": null
     *   }
     * }
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function index(Request $request): array
    {
        // Query parameters
        $filters = $request->validate([
            // Card
            'card_id' => 'exists:cards,id|nullable',

            // Gender contains
            'gender' => 'string|nullable',

            // Age is
            'age' => 'integer|nullable',

            // Sort by given field
            'sort' => 'string|in:id,card_id,gender,age|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(Person::where('instance_id', $request->user()->instance_id), [
            'card_id' => 'match',
            'gender' => 'contains',
            'age' => 'match'
        ], $filters));
    }

    /**
     * Create new Person
     *
     * @param \App\Http\Requests\ManagePersonRequest $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(ManagePersonRequest $request): Model
    {
        $instance = Instance::find($request->user()->instance_id);

        /** @var Person $person */
        $person = $instance->people()->create($request->validated());
        $person->limitationSets()->sync($request->validated('limitation_sets'));

        return $person;
    }

    /**
     * Show specified Person
     *
     * @response status=200 {
     *   "id": 2,
     *   "card_id": 1,
     *   "gender": "female",
     *   "age": 15,
     *   "created_at": "2022-08-18T13:48:25.000000Z",
     *   "updated_at": "2022-08-18T13:48:25.000000Z"
     * }
     *
     * @param \App\Models\Person $person
     * @return \App\Models\Person
     */
    public function show(Person $person): Person
    {
        return $person;
    }

    /**
     * Update specified Person
     *
     * @param \App\Http\Requests\ManagePersonRequest $request
     * @param \App\Models\Person $person
     * @return \App\Models\Person
     */
    public function update(ManagePersonRequest $request, Person $person): Person
    {
        $person->update($request->validated());
        $person->limitationSets()->sync($request->validated('limitation_sets'));

        return $person;
    }

    /**
     * Delete specified Person
     *
     * @response status=200 {
     *   "success": true
     * }
     *
     * @param \App\Models\Person $person
     * @return array
     */
    public function destroy(Person $person): array
    {
        return ['success' => $person->delete()];
    }
}
