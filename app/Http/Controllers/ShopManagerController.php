<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageShopRequest;
use App\Models\Instance;
use App\Models\Shop;
use App\Service\ModelFilterService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @group Shop
 * @authenticated
 */
class ShopManagerController extends Controller
{
    /**
     * List all Shops
     *
     * @response status=200 {
     *   "items": [
     *     {
     *       "id": 1,
     *       "organization_id": 1,
     *       "name": "organization",
     *       "street": "organizations street",
     *       "postcode": "12345",
     *       "city": "oraganizations city",
     *       "contact": "organizations contact",
     *       "opening_hours": {
     *         "monday": [
     *           {
     *             "slots": "4",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "tuesday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "wednesday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "thursday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "friday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "saturday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "sunday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ]
     *       },
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }, {
     *       "id": 2
     *       "organization_id": 3,
     *       "name": "organization",
     *       "street": "organizations street",
     *       "postcode": "12345",
     *       "city": "organizations city",
     *       "contact": "organizations contact",
     *       "opening_hours": {
     *         "monday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "tuesday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "wednesday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "thursday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "friday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "saturday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ],
     *         "sunday": [
     *           {
     *             "slots": "2",
     *             "opens_at": "08:00",
     *             "closes_at": "17:00"
     *           }
     *         ]
     *       },
     *       "created_at": "2022-08-18T13:48:25.000000Z",
     *       "updated_at": "2022-08-18T13:48:25.000000Z"
     *     }
     *   ],
     *   "meta": {
     *     "current_page": 1,
     *     "last_page": 1,
     *     "per_page": 25,
     *     "item_count": 2
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

            // Street contains
            'street' => 'string|nullable',

            // Postcode contains
            'postcode' => 'string|nullable',

            // City contains
            'city' => 'string|nullable',

            // Contact contains
            'contact' => 'string|nullable',

            // Sort by given field
            'sort' => 'string|in:id,organization_id,name,street,postcode,city,contact|nullable',

            // Sort ascending or descending
            'order' => 'string|in:asc,desc|nullable',

            // Page to load
            'page' => 'integer|nullable',

            // Items per page
            'limit' => 'integer|min:10|max:500|nullable'
        ]);

        $query = Shop::where('instance_id', $request->user()->instance_id);

        if (!$request->user()->hasPermissionTo('admin.shop.index')) {
            $query->where('organization_id', $request->user()->organization_id);
        }

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries($query, [
            'organization_id' => 'match',
            'name' => 'contains',
            'street' => 'contains',
            'postcode' => 'contains',
            'city' => 'contains',
            'contact' => 'contains'
        ], $filters), $filters['limit'] ?? 25);
    }

    /**
     * Create new Shop
     *
     * @param \App\Http\Requests\ManageShopRequest $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(ManageShopRequest $request): Model
    {
        $validated = $request->validated();

        if (
            !$request->user()->hasPermissionTo('admin.shop.store') &&
            $validated['organization_id'] != $request->user()->organization_id
        ) {
            abort(403);
        }

        $instance = Instance::find($request->user()->instance_id);
        return $instance->shops()->create($validated);
    }

    /**
     * Show specified Shop
     *
     * @response status=200 {
     *   "id": 1,
     *   "organization_id": 1,
     *   "name": "organization",
     *   "street": "organizations street",
     *   "postcode": "12345",
     *   "city": "organizations city",
     *   "contact": "organizations contact",
     *   "opening_hours": {
     *     "monday": [
     *       {
     *         "opens_at": "08:00",
     *         "closes_at": "17:00"
     *       }
     *     ],
     *     "tuesday": [
     *       {
     *         "opens_at": "08:00",
     *         "closes_at": "17:00"
     *       }
     *     ],
     *     "wednesday": [
     *       {
     *         "opens_at": "08:00",
     *         "closes_at": "17:00"
     *       }
     *     ],
     *     "thursday": [
     *       {
     *         "opens_at": "08:00",
     *         "closes_at": "17:00"
     *       }
     *     ],
     *     "friday": [
     *       {
     *         "opens_at": "08:00",
     *         "closes_at": "17:00"
     *       }
     *     ],
     *     "saturday": [
     *       {
     *         "opens_at": "08:00",
     *         "closes_at": "17:00"
     *       }
     *     ],
     *     "sunday": [
     *       {
     *         "opens_at": "08:00",
     *         "closes_at": "17:00"
     *       }
     *     ]
     *   },
     *   "created_at": "2022-08-18T13:48:25.000000Z",
     *   "updated_at": "2022-08-18T13:48:25.000000Z"
     * }
     *
     * @param \App\Models\Shop $shop
     * @return \App\Models\Shop
     */
    public function show(Shop $shop): Shop
    {
        return $shop;
    }

    /**
     * Update specified Shop
     *
     * @param \App\Http\Requests\ManageShopRequest $request
     * @param \App\Models\Shop $shop
     * @return \App\Models\Shop
     */
    public function update(ManageShopRequest $request, Shop $shop): Shop
    {
        $shop->update($request->validated());
        return $shop;
    }

    /**
     * Delete specified Shop
     *
     * @response status=200 {
     *   "success": true
     * }
     *
     * @param \App\Models\Shop $shop
     * @return array
     */
    public function destroy(Shop $shop): array
    {
        return ['success' => $shop->delete()];
    }
}
