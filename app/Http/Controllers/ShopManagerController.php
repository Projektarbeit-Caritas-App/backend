<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageShopRequest;
use App\Models\Shop;
use App\Service\ModelFilterService;
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
     * @response status=200
     * [
     *  {
     *      "id": 1,
     *      "organization_id": 1,
     *      "name": "organization",
     *      "street": "organizations street",
     *      "postcode": "12345",
     *      "city": "oraganizations city",
     *      "contact": "organizations contact",
     *      "opening_hours":
     *      {
     *          "opening_hours":
     *          [
     *              {
     *                  "monday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "tuesday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "wednesday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "thursday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "friday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "saturday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "sunday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              }
     *          ]
     *      },
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     *  },
     *  {
     *      "id": "
     *      "organization_id": §,
     *      "name": "organization",
     *      "street": "organizations street",
     *      "postcode": "12345",
     *      "city": "organizations city",
     *      "contact": "organizations contact",
     *      "opening_hours":
     *      {
     *          "opening_hours":
     *          [
     *              {
     *                  "monday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "tuesday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "wednesday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "thursday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "friday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "saturday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "sunday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              }
     *          ]
     *      },
     *      "created_at": "2022-08-18T13:48:25.000000Z",
     *      "updated_at": "2022-08-18T13:48:25.000000Z"
     *  }
     * ]
     *
     * @return \Illuminate\Database\Eloquent\Collection
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
            'page' => 'integer|nullable'
        ]);

        return ModelFilterService::apiPaginate(ModelFilterService::filterEntries(Shop::query(), [
            'organization_id' => 'match',
            'name' => 'contains',
            'street' => 'contains',
            'postcode' => 'contains',
            'city' => 'contains',
            'contact' => 'contains'
        ], $filters));
    }

    /**
     * Create new Shop
     *
     * @param \App\Http\Requests\ManageShopRequest $request
     * @return \App\Models\Shop
     */
    public function store(ManageShopRequest $request): Shop
    {
        return Shop::create($request->validated());
    }

    /**
     * Show specified Shop
     *
     * @response status=200
     * [
     *  {
     *      "id": 1,
     *      "organization_id": 1,
     *      "name": "organization",
     *      "street": "organizations street",
     *      "postcode": "12345",
     *      "city": "oraganizations city",
     *      "contact": "organizations contact",
     *      "opening_hours":
     *      {
     *          "opening_hours":
     *          [
     *              {
     *                  "monday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "tuesday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "wednesday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "thursday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "friday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "saturday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              },
     *              {
     *                  "sunday":
     *                  {
     *                      "opens_at": "08:00",
     *                      "closes_at": "17:00"
     *                  }
     *              }
     *          ]
     *      },
     *  "created_at": "2022-08-18T13:48:25.000000Z",
     *  "updated_at": "2022-08-18T13:48:25.000000Z"
     *  }
     * ]
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
     * @response status=200
     * {
     *  "success": true
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
