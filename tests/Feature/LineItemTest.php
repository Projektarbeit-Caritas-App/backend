<?php

namespace Tests\Feature;

use App\Models\Card;
use App\Models\Instance;
use App\Models\LineItem;
use App\Models\Organization;
use App\Models\Person;
use App\Models\ProductType;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;

class LineItemTest extends TestCase
{
    use DatabaseTransactions;

    private $instance;
    private $organization;
    private $user;
    private $card;
    private $visit;
    private $person;
    private $productType;
    private $lineItem;

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

        $this->card = new Card;
        $this->card->instance_id = $this->instance->id;
        $this->card->creator_id = $this->user->id;
        $this->card->last_name = "Kitsune";
        $this->card->first_name = "Yasu";
        $this->card->street = "Foxstreet 10";
        $this->card->postcode = "12345";
        $this->card->city = "Foxhole";
        $this->card->comment = "Comment";
        $this->card->valid_from = "2022-07-04 12:00:00";
        $this->card->valid_until = "2022-07-04 12:00:00";
        $this->card->save();

        $this->visit = new Visit();
        $this->visit->instance_id = $this->instance->id;
        $this->visit->card_id = $this->card->id;
        $this->visit->user_id = $this->user->id;
        $this->visit->save();

        $this->person = new Person();
        $this->person->instance_id = $this->instance->id;
        $this->person->card_id = $this->card->id;
        $this->person->gender = "male";
        $this->person->age = 18;
        $this->person->save();

        $this->productType = new ProductType();
        $this->productType->instance_id = $this->instance->id;
        $this->productType->name = "name";
        $this->productType->icon = "icon";
        $this->productType->save();

        $this->lineItem = new LineItem();
        $this->lineItem->instance_id = $this->instance->id;
        $this->lineItem->visit_id = $this->visit->id;
        $this->lineItem->person_id = $this->person->id;
        $this->lineItem->product_type_id = $this->productType->id;
        $this->lineItem->save();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_lineItem()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/lineItem/' . $this->lineItem->id)
            ->assertJsonStructure([
                "id",
                "visit_id",
                "person_id",
                "product_type_id",
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
    public function test_index_lineItem()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/lineItem/')
            ->assertJsonStructure([
                "items" => [
                    [
                        "id",
                        "visit_id",
                        "person_id",
                        "product_type_id",
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
    public function test_create_lineItem()
    {
        $payload = [
            'visit_id' => $this->visit->id,
            'person_id' => $this->person->id,
            'product_type_id' => $this->productType->id
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/lineItem/', $payload)
            ->assertSuccessful();

        assertEquals(2, LineItem::count());
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update_lineItem()
    {
        $payload = [
            'visit_id' => $this->visit->id,
            'person_id' => $this->person->id,
            'product_type_id' => $this->productType->id
        ];

        assertEquals($payload['visit_id'], $this->lineItem->visit_id);
        assertEquals($payload['person_id'], $this->lineItem->person_id);
        assertEquals($payload['product_type_id'], $this->lineItem->product_type_id);

        $response = $this->actingAs($this->user)
            ->put('/api/admin/lineItem/' . $this->lineItem->id, $payload)
            ->assertSuccessful();

        $this->lineItem = $this->lineItem->refresh();
        assertEquals($payload['visit_id'], $this->lineItem->visit_id);
        assertEquals($payload['person_id'], $this->lineItem->person_id);
        assertEquals($payload['product_type_id'], $this->lineItem->product_type_id);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_lineItem()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/lineItem/' . $this->lineItem->id)
            ->assertSuccessful();

        assertFalse(LineItem::exists());
    }
}
