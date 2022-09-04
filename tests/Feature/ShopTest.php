<?php

namespace Tests\Feature;

use App\Models\Instance;
use App\Models\Organization;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertNotEquals;

class ShopTest extends TestCase
{
    use DatabaseTransactions;

    private $instance;
    private $organization;
    private $user;
    private $shop;

    protected function setUp(): void
    {
        parent::setUp();

        $this->instance = new Instance;
        $this->instance->name = "Instance Name";
        $this->instance->street = "Instance Street";
        $this->instance->postcode = "12345";
        $this->instance->city = "Instance city";
        $this->instance->contact = "Instance contact";
        $this->instance->save();

        $this->organization = new Organization;
        $this->organization->name = "Organization Name";
        $this->organization->street = "Organization Street";
        $this->organization->postcode = "12345";
        $this->organization->city = "Organization City";
        $this->organization->contact = "Organization Contact";
        $this->instance->organizations()->save($this->organization);

        $this->user = new User;
        $this->user->name = "Test User Name";
        $this->user->email = "test@web.de";
        $this->user->password = Hash::make("Test User Password");
        $this->user->syncRoles("instance_manager");
        $this->user->instance_id = $this->instance->id;
        $this->organization->users()->save($this->user);

        $this->shop = new Shop();
        $this->shop->organization_id = $this->organization->id;
        $this->shop->instance_id = $this->instance->id;
        $this->shop->name = "Shop name";
        $this->shop->street = "Shop street";
        $this->shop->postcode = "Shop postcode";
        $this->shop->city = "Shop city";
        $this->shop->contact = "Shop contact";
        $this->shop->opening_hours = [
            "monday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
            "tuesday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
            "wednesday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
            "thursday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
            "friday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
            "saturday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
            "sunday" =>
                [
                    [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
        ];
        $this->shop->save();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_shop()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/shop/' . $this->shop->id)
            ->assertJsonStructure([
                "id",
                "organization_id",
                "name",
                "street",
                "postcode",
                "city",
                "contact",
                "opening_hours" => [
                    "monday" => [
                        "*" => [
                            "opens_at",
                            "closes_at",
                            "slots"
                        ]
                    ],
                    "tuesday" => [
                        "*" => [
                            "opens_at",
                            "closes_at",
                            "slots"
                        ]
                    ],
                    "wednesday" => [
                        "*" => [
                            "opens_at",
                            "closes_at",
                            "slots"
                        ]
                    ],
                    "thursday" => [
                        "*" => [
                            "opens_at",
                            "closes_at",
                            "slots"
                        ]
                    ],
                    "friday" => [
                        "*" => [
                            "opens_at",
                            "closes_at",
                            "slots"
                        ]
                    ],
                    "saturday" => [
                        "*" => [
                            "opens_at",
                            "closes_at",
                            "slots"
                        ]
                    ],
                    "sunday" => [
                        "*" => [
                            "opens_at",
                            "closes_at",
                            "slots"
                        ]
                    ]
                ]
            ])
            ->assertSuccessful();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_shop()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/shop/')
            ->assertJsonStructure([
                    "items" => [
                        "*" => [
                            "id",
                            "organization_id",
                            "name",
                            "street",
                            "postcode",
                            "city",
                            "contact",
                            "opening_hours" => [
                                "monday" => [
                                    "*" => [
                                        "opens_at",
                                        "closes_at",
                                        "slots"
                                    ]
                                ],
                                "tuesday" => [
                                    "*" => [
                                        "opens_at",
                                        "closes_at",
                                        "slots"
                                    ]
                                ],
                                "wednesday" => [
                                    "*" => [
                                        "opens_at",
                                        "closes_at",
                                        "slots"
                                    ]
                                ],
                                "thursday" => [
                                    "*" => [
                                        "opens_at",
                                        "closes_at",
                                        "slots"
                                    ]
                                ],
                                "friday" => [
                                    "*" => [
                                        "opens_at",
                                        "closes_at",
                                        "slots"
                                    ]
                                ],
                                "saturday" => [
                                    "*" => [
                                        "opens_at",
                                        "closes_at",
                                        "slots"
                                    ]
                                ],
                                "sunday" => [
                                    "*" => [
                                        "opens_at",
                                        "closes_at",
                                        "slots"
                                    ]
                                ]
                            ]

                        ]
                    ],
                    "meta" => [
                        "current_page",
                        "last_page",
                        "per_page",
                        "item_count"
                    ],
                    "links" => [
                        "prev_page_url",
                        "next_page_url"
                    ]
                ]
            )
            ->assertSuccessful();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_organization()
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
                    "*" => [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
                "tuesday" => [
                    "*" => [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
                "wednesday" => [
                    "*" => [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
                "thursday" => [
                    "*" => [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
                "friday" => [
                    "*" => [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
                "saturday" => [
                    "*" => [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ],
                "sunday" => [
                    "*" => [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 4
                    ]
                ]
            ]
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/shop/', $payload)
            ->assertSuccessful();

        assertEquals(2, Shop::count());
    }

    /**
     * A basic feature test example.
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
                    "*" => [
                        "opens_at" => "08:30",
                        "closes_at" => "16:00",
                        "slots" => 1
                    ]
                ],
                "tuesday" => [
                    "*" => [
                        "opens_at" => "05:30",
                        "closes_at" => "15:00",
                        "slots" => 3
                    ]
                ],
                "wednesday" => [
                    "*" => [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 2
                    ]
                ],
                "thursday" => [
                    "*" => [
                        "opens_at" => "07:30",
                        "closes_at" => "19:00",
                        "slots" => 7
                    ]
                ],
                "friday" => [
                    "*" => [
                        "opens_at" => "09:30",
                        "closes_at" => "19:00",
                        "slots" => 2
                    ]
                ],
                "saturday" => [
                    "*" => [
                        "opens_at" => "12:30",
                        "closes_at" => "19:00",
                        "slots" => 1
                    ]
                ],
                "sunday" => [
                    "*" => [
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
            ->assertSuccessful();

        $this->shop = $this->shop->refresh();
        assertEquals($payload['name'], $this->shop->name);
        assertEquals($payload['street'], $this->shop->street);
        assertEquals($payload['postcode'], $this->shop->postcode);
        assertEquals($payload['city'], $this->shop->city);
        assertEquals($payload['contact'], $this->shop->contact);
        assertEquals($payload['opening_hours'], $this->shop->opening_hours);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_shop()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/shop/' . $this->shop->id)
            ->assertSuccessful();

        assertFalse(Shop::exists());
    }
}
