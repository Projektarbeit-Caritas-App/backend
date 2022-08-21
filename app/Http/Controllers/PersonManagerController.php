<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManagePersonRequest;
use App\Models\Person;

/**
 * @group Person
 * @authenticated
 */
class PersonManagerController extends Controller
{
    /**
     * List all persons
     *
     * @response status=200
     * [
     *  {
     *      "id": 1,
     *      "card_id": 1,
     *      "gender": "male",
     *      "age": 18,
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     *  },
     *  {
     *      "id": 2,
     *      "card_id": 1,
     *      "gender": "female",
     *      "age": 15,
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     *  },
     *  {
     *      "id": 3,
     *      "card_id": 49394739894111,
     *      "gender": "male",
     *      "age": 23,
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     *  }
     * ]
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Person::all();
    }

    /**
     * Create new Person
     *
     * @param \App\Http\Requests\ManagePersonRequest $request
     * @return \App\Models\Person
     */
    public function store(ManagePersonRequest $request)
    {
        return Person::create($request->validated());
    }

    /**
     * Show specified Person
     *
     * @response status=200
     * {
     *      "id": 2,
     *      "card_id": 1,
     *      "gender": "female",
     *      "age": 15,
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     * }
     *
     * @param \App\Models\Person $person
     * @return \App\Models\Person
     */
    public function show(Person $person)
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
    public function update(ManagePersonRequest $request, Person $person)
    {
        $person->update($request->validated());
        return $person;
    }

    /**
     * Delete specified Person
     *
     * @response status=200
     * {
     *  "success": true
     * }
     *
     * @param \App\Models\Person $person
     * @return array
     */
    public function destroy(Person $person)
    {
        return ['success' => $person->delete()];
    }
}
