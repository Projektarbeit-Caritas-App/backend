<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManagePersonRequest;
use App\Models\Person;

class PersonManagerController extends Controller
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
     * @param \App\Models\Person $person
     * @return array
     */
    public function destroy(Person $person)
    {
        return ['success' => $person->delete()];
    }
}
