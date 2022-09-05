<?php

namespace Tests\Feature;

use App\Models\Instance;
use App\Models\Organization;
use App\Models\ProductType;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertNotEquals;

class ProductTypeTest extends TestCase
{
    use DatabaseTransactions;

    private $instance;
    private $organization;
    private $user;
    private $productType;

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

        $this->productType = new ProductType();
        $this->productType->instance_id = $this->instance->id;
        $this->productType->name = "name";
        $this->productType->icon = "icon";
        $this->productType->save();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_productType()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/product-type/' . $this->productType->id)
            ->assertJsonStructure([
                "id",
                "name",
                "icon",
                "created_at",
                "updated_at"
            ])
            ->assertSuccessful();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_productType()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/product-type/')
            ->assertJsonStructure([
                "items" => [
                    "*" => [
                        "id",
                        "name",
                        "icon",
                        "created_at",
                        "updated_at"
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
            ])->assertSuccessful();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_productType()
    {
        $payload = [
            "name" => "name",
            "icon" => "icon"
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/product-type/', $payload)
            ->assertSuccessful();

        assertEquals(2, ProductType::count());
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update_productType()
    {
        $payload = [
            "name" => "name Updated",
            "icon" => "icon Updated"
        ];

        assertNotEquals($payload['name'], $this->productType->name);
        assertNotEquals($payload['icon'], $this->productType->icon);

        $response = $this->actingAs($this->user)
            ->put('/api/admin/product-type/' . $this->productType->id, $payload)
            ->assertSuccessful();

        $this->productType = $this->productType->refresh();
        assertEquals($payload['name'], $this->productType->name);
        assertEquals($payload['icon'], $this->productType->icon);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_productType()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/product-type/' . $this->productType->id)
            ->assertSuccessful();

        assertFalse(ProductType::exists());
    }
}
