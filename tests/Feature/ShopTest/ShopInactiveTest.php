<?php

namespace Tests\Feature\ShopTest;

use App\Models\Shop;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotEquals;
use function PHPUnit\Framework\assertTrue;

class ShopInactiveTest extends ShopTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->user->syncRoles('inactive');
    }

    /**
     * Test positive behavior of show shop
     *
     * @return void
     */
    public function test_show_shop()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/shop/' . $this->shop->id)
            ->assertForbidden();
    }

    /**
     * Test positive behavior of index shop
     *
     * @return void
     */
    public function test_index_shop()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/shop/')
            ->assertForbidden();
    }

    /**
     * Test positive behavior of create shop
     *
     * @return void
     */
    public function test_create_shop()
    {
        $payload = [
            "organization_id" => $this->organization->id,
            "instance_id" => $this->instance->id,
            "name" => "Shop name",
            "street" => "Shop street",
            "postcode" => "Shop postcode",
            "city" => "Shop city",
            "contact" => "Shop contact",
            "opening_hours" => [
                "monday" => [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
                "tuesday" => [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
                "wednesday" => [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
                "thursday" => [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
                "friday" => [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
                "saturday" => [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
                "sunday" => [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ]
            ]
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/shop/', $payload)
            ->assertForbidden();

        assertEquals(1, Shop::count());
    }

    /**
     * Test positive behavior of update shop
     *
     * @return void
     */
    public function test_update_shop()
    {
        $payload = [
            "organization_id" => $this->organization->id,
            "instance_id" => $this->instance->id,
            "name" => "Shop name 2",
            "street" => "Shop street 2",
            "postcode" => "Shop postcode 2",
            "city" => "Shop city 2",
            "contact" => "Shop contact 2",
            "opening_hours" => [
                "monday" => [
                    [
                        "opens_at" => "08:30",
                        "closes_at" => "16:00",
                        "slots" => 1
                    ]
                ],
                "tuesday" => [
                    [
                        "opens_at" => "05:30",
                        "closes_at" => "15:00",
                        "slots" => 3
                    ]
                ],
                "wednesday" => [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 2
                    ]
                ],
                "thursday" => [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 7
                    ]
                ],
                "friday" => [
                    [
                        "opens_at" => "09:30",
                        "closes_at" => "19:00",
                        "slots" => 2
                    ]
                ],
                "saturday" => [
                    [
                        "opens_at" => "12:30",
                        "closes_at" => "19:00",
                        "slots" => 1
                    ]
                ],
                "sunday" => [
                    [
                        "opens_at" => "12:30",
                        "closes_at" => "19:00",
                        "slots" => 3
                    ]
                ]
            ]
        ];

        assertNotEquals($payload['name'], $this->shop->name);
        assertNotEquals($payload['street'], $this->shop->street);
        assertNotEquals($payload['postcode'], $this->shop->postcode);
        assertNotEquals($payload['city'], $this->shop->city);
        assertNotEquals($payload['contact'], $this->shop->contact);
        assertNotEquals($payload['opening_hours'], $this->shop->opening_hours);

        $response = $this->actingAs($this->user)
            ->put('/api/admin/shop/' . $this->shop->id, $payload)
            ->assertForbidden();

        $this->shop = $this->shop->refresh();
        assertNotEquals($payload['name'], $this->shop->name);
        assertNotEquals($payload['street'], $this->shop->street);
        assertNotEquals($payload['postcode'], $this->shop->postcode);
        assertNotEquals($payload['city'], $this->shop->city);
        assertNotEquals($payload['contact'], $this->shop->contact);
        assertNotEquals($payload['opening_hours'], $this->shop->opening_hours);
    }

    /**
     * Test positive behavior of delete shop
     *
     * @return void
     */
    public function test_delete_shop()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/shop/' . $this->shop->id)
            ->assertForbidden();

        assertTrue(Shop::exists());
    }
}
