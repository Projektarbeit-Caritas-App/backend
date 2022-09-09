<?php

namespace Tests\Feature;

use App\Models\Instance;
use App\Models\Limitation;
use App\Models\LimitationSet;
use App\Models\Organization;
use App\Models\ProductType;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertNotEquals;

class LimitationTest extends TestCase
{
    use DatabaseTransactions;

    private $instance;
    private $organization;
    private $user;
    private $limitationSet;
    private $productType;
    private $limitation;

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

        $this->limitationSet = new LimitationSet();
        $this->limitationSet->instance_id = $this->instance->id;
        $this->limitationSet->name = "A set to limit them all ~ Tolkien II";
        $this->limitationSet->valid_from = "2022-08-04 12:00:00";
        $this->limitationSet->valid_until = "2022-08-04 12:00:00";
        $this->limitationSet->save();

        $this->productType = new ProductType();
        $this->productType->instance_id = $this->instance->id;
        $this->productType->name = "name";
        $this->productType->icon = "icon";
        $this->productType->save();

        $this->limitation = new Limitation();
        $this->limitation->instance_id = $this->instance->id;
        $this->limitation->product_type_id = $this->productType->id;
        $this->limitation->limitation_set_id = $this->limitationSet->id;
        $this->limitation->limit = 5;
        $this->limitation->save();
    }

    /**
     * Test positive behavior of show limitation
     *
     * @return void
     */
    public function test_show_limitation()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/limitation/limit/' . $this->limitation->id)
            ->assertJsonStructure([
                "id",
                "product_type_id",
                "limitation_set_id",
                "limit",
                "created_at",
                "updated_at"
            ])
            ->assertSuccessful();
    }

    /**
     * Test positive behavior of index limitation
     *
     * @return void
     */
    public function test_index_limitation()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/limitation/limit/')
            ->assertJsonStructure([
                "items" => [
                    [
                        "id",
                        "product_type_id",
                        "limitation_set_id",
                        "limit",
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
     * Test positive behavior of create limitation
     *
     * @return void
     */
    public function test_create_limitation()
    {
        $payload = [
            'product_type_id' => $this->productType->id,
            'limitation_set_id' => $this->limitationSet->id,
            'limit' => 5
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/limitation/limit/', $payload)
            ->assertSuccessful();

        assertEquals(2, Limitation::count());
    }

    /**
     * Test positive behavior of update limitation
     *
     * @return void
     */
    public function test_update_limitation()
    {
        $payload = [
            'product_type_id' => $this->productType->id,
            'limitation_set_id' => $this->limitationSet->id,
            'limit' => 15
        ];

        assertNotEquals($payload['limit'], $this->limitation->limit);

        $response = $this->actingAs($this->user)
            ->put('/api/admin/limitation/limit/' . $this->limitation->id, $payload)
            ->assertSuccessful();

        $this->limitation = $this->limitation->refresh();
        assertEquals($payload['limit'], $this->limitation->limit);
    }

    /**
     * Test positive behavior of delete limitation
     *
     * @return void
     */
    public function test_delete_limitation()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/limitation/limit/' . $this->limitation->id)
            ->assertSuccessful();

        assertFalse(Limitation::exists());
    }
}
