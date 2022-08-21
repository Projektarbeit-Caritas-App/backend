<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageUserRequest;
use App\Models\User;
use App\Service\ModelFilterService;
use Illuminate\Http\Request;

/**
 * @group User
 * @authenticated
 */
class UserManagerController extends Controller
{
    /**
     * List all Users
     *
     * @response {
     *   "items": [
     *     {
     *       "id": 3,
     *       "instance_id": 3,
     *       "organization_id": 3,
     *       "name": "Rene",
     *       "email": "rene@web.de",
     *       "created_at": "2022-08-21T11:34:55.000000Z",
     *       "updated_at": "2022-08-21T11:34:55.000000Z"
     *     }
     *   ],
     *   "meta": {
     *     "current_page": 1,
     *     "last_page": 1,
     *     "per_page": 25,
     *     "item_count": 1
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
            // Organization
            'organization_id' => 'exists:organizations,id|nullable',

            // Name contains
            'name' => 'string|nullable',

            // E-Mail contains
            'email' => 'string|nullable',

            // Sort by given field
            'sort' => 'string|in:id,organization_id,name,email|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(User::where('instance_id', $request->user()->instance_id), [
            'organization_id' => 'match',
            'name' => 'contains',
            'email' => 'contains'
        ], $filters));
    }

    /**
     * Create new User
     *
     * @param \App\Http\Requests\ManageUserRequest $request
     * @return \App\Models\User
     */
    public function store(ManageUserRequest $request)
    {
        return User::create($request->validated());
    }

    /**
     * Show specified User
     *
     * @param \App\Models\User $user
     * @return \App\Models\User
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Update specified User
     *
     * @param \App\Http\Requests\ManageUserRequest $request
     * @param \App\Models\User $user
     * @return \App\Models\User
     */
    public function update(ManageUserRequest $request, User $user)
    {
        $user->update($request->validated());
        return $user;
    }

    /**
     * Delete specified User
     *
     * @response status=200 {
     *   "success": true
     * }
     *
     * @param \App\Models\User $user
     * @return array
     */
    public function destroy(User $user)
    {
        return ['success' => $user->delete()];
    }


}
