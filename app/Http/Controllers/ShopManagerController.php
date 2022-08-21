<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageShopRequest;
use App\Models\Shop;

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
     */
    public function index()
    {
        return Shop::all();
    }

    /**
     * Create new Shop
     *
     * @param \App\Http\Requests\ManageShopRequest $request
     * @return \App\Models\Shop
     */
    public function store(ManageShopRequest $request)
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
    public function show(Shop $shop)
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
    public function update(ManageShopRequest $request, Shop $shop)
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
    public function destroy(Shop $shop)
    {
        return ['success' => $shop->delete()];
    }
}
