<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * List all persons
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
     * @param \App\Http\Requests\PersonRequest $request
     * @return \App\Models\Person
     */
    public function store(PersonRequest $request)
    {
        return Person::create($request->validated());
    }

    /**
     * Show specified Person
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
     * @param \App\Http\Requests\PersonRequest $request
     * @param \App\Models\Person $person
     * @return \App\Models\Person
     */
    public function update(PersonRequest $request, Person $person)
    {
        $person->update($request->validated());
        return $person;
    }

    /**
     * Delete specified Person
     *
     * @param \App\Models\Person $person
     * @return array
     */
    public function destroy(Person $person)
    {
        return ['success' => $person->delete()];
    }
}
