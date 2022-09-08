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
     *       "limitation_sets": [
     *         {
     *           "id": 1,
     *           "name": "A set to limit them all",
     *           "valid_from": "2022-08-04 12:00:00",
     *           "valid_until": "2022-08-04 12:00:00",
     *           "created_at": "2022-09-08T13:05:40.000000Z",
     *           "updated_at": "2022-09-08T13:05:40.000000Z",
     *           "instance_id": 1,
     *           "pivot": {
     *             "person_id": 1,
     *             "limitation_set_id": 1,
     *             "created_at": "2022-09-08T13:06:41.000000Z",
     *             "updated_at": "2022-09-08T13:06:41.000000Z"
     *           }
     *         }
     *       ],
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }, {
     *       "id": 2,
     *       "card_id": 1,
     *       "gender": "female",
     *       "age": 15,
     *       "limitation_sets": [
     *         {
     *           "id": 1,
     *           "name": "A set to limit them all",
     *           "valid_from": "2022-08-04 12:00:00",
     *           "valid_until": "2022-08-04 12:00:00",
     *           "created_at": "2022-09-08T13:05:40.000000Z",
     *           "updated_at": "2022-09-08T13:05:40.000000Z",
     *           "instance_id": 1,
     *           "pivot": {
     *             "person_id": 2,
     *             "limitation_set_id": 1,
     *             "created_at": "2022-09-08T13:06:41.000000Z",
     *             "updated_at": "2022-09-08T13:06:41.000000Z"
     *           }
     *         }
     *       ],
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }, {
     *       "id": 3,
     *       "card_id": 49394739894111,
     *       "gender": "male",
     *       "age": 23,
     *       "limitation_sets": [
     *         {
     *           "id": 1,
     *           "name": "A set to limit them all",
     *           "valid_from": "2022-08-04 12:00:00",
     *           "valid_until": "2022-08-04 12:00:00",
     *           "created_at": "2022-09-08T13:05:40.000000Z",
     *           "updated_at": "2022-09-08T13:05:40.000000Z",
     *           "instance_id": 1,
     *           "pivot": {
     *             "person_id": 3,
     *             "limitation_set_id": 1,
     *             "created_at": "2022-09-08T13:06:41.000000Z",
     *             "updated_at": "2022-09-08T13:06:41.000000Z"
     *           }
     *         }
     *       ],
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
            'page' => 'integer|nullable',

            // Items per page
            'limit' => 'integer|min:10|max:500|nullable'
        ]);

        return ModelFilterService::apiPaginate(
            ModelFilterService::filterEntries(
                Person::where('instance_id', $request->user()->instance_id)->with('limitationSets'),
                [
                    'card_id' => 'match',
                    'gender' => 'contains',
                    'age' => 'match'
                ],
                $filters
            ),
            $filters['limit'] ?? 25
        );
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
     *   "limitation_sets": [
     *     {
     *       "id": 1,
     *       "name": "A set to limit them all",
     *       "valid_from": "2022-08-04 12:00:00",
     *       "valid_until": "2022-08-04 12:00:00",
     *       "created_at": "2022-09-08T13:05:40.000000Z",
     *       "updated_at": "2022-09-08T13:05:40.000000Z",
     *       "instance_id": 1,
     *       "pivot": {
     *         "person_id": 2,
     *         "limitation_set_id": 1,
     *         "created_at": "2022-09-08T13:06:41.000000Z",
     *         "updated_at": "2022-09-08T13:06:41.000000Z"
     *       }
     *     }
     *   ],
     *   "created_at": "2022-08-18T13:48:25.000000Z",
     *   "updated_at": "2022-08-18T13:48:25.000000Z"
     * }
     *
     * @param \App\Models\Person $person
     * @return \App\Models\Person
     */
    public function show(Person $person): Person
    {
        $person->load('limitationSets');
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
