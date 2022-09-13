<?php

namespace Tests\Feature\ShopTest;

use App\Models\Instance;
use App\Models\Organization;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

abstract class ShopTest extends TestCase
{
    use DatabaseTransactions;

    protected $instance;
    protected $organization;
    protected $user;
    protected $shop;

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
}
