<?php

namespace Tests\Feature;

use App\Models\Card;
use App\Models\Instance;
use App\Models\Limitation;
use App\Models\LimitationSet;
use App\Models\Organization;
use App\Models\Person;
use App\Models\ProductType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CheckoutTest extends TestCase
{
    use DatabaseTransactions;

    private $instance;
    private $organization;
    private $user;
    private $limitationSet;
    private $limitationSet2;
    private $limitationSet3;
    private $productType;
    private $limitation;
    private $person;
    private $card;
    private $person2;
    private $card2;
    private $person3;
    private $card3;

    protected function setUp(): void // TODO clean up
    {
        parent::setUp();

        $this->instance           = new Instance;
        $this->instance->name     = "Instance Name";
        $this->instance->street   = "Instance Street";
        $this->instance->postcode = "12345";
        $this->instance->city     = "Instance city";
        $this->instance->contact  = "Instance contact";
        $this->instance->save();

        $this->organization           = new Organization;
        $this->organization->name     = "Organization Name";
        $this->organization->street   = "Organization Street";
        $this->organization->postcode = "12345";
        $this->organization->city     = "Organization City";
        $this->organization->contact  = "Organization Contact";
        $this->instance->organizations()->save($this->organization);

        $this->user           = new User;
        $this->user->name     = "Test User Name";
        $this->user->email    = "test@web.de";
        $this->user->password = Hash::make("Test User Password");
        $this->user->syncRoles("instance_manager");
        $this->user->instance_id = $this->instance->id;
        $this->organization->users()->save($this->user);

        $this->card              = new Card;
        $this->card->instance_id = $this->instance->id;
        $this->card->creator_id  = $this->user->id;
        $this->card->last_name   = "Kitsune";
        $this->card->first_name  = "Yasu";
        $this->card->street      = "Foxstreet 10";
        $this->card->postcode    = "12345";
        $this->card->city        = "Foxhole";
        $this->card->comment     = "Comment";
        $this->card->valid_from  = Carbon::yesterday();
        $this->card->valid_until = Carbon::tomorrow();
        $this->card->save();

        $this->person              = new Person();
        $this->person->instance_id = $this->instance->id;
        $this->person->card_id     = $this->card->id;
        $this->person->gender      = "male";
        $this->person->age         = 18;
        $this->person->save();

        $this->limitationSet              = new LimitationSet();
        $this->limitationSet->instance_id = $this->instance->id;
        $this->limitationSet->name        = "A set to limit them all ~ Tolkien II";
        $this->limitationSet->valid_from  = "2022-08-04 12:00:00";
        $this->limitationSet->valid_until = "2022-08-04 12:00:00";
        $this->person->limitationSets()->save($this->limitationSet);

        $this->card2              = new Card;
        $this->card2->instance_id = $this->instance->id;
        $this->card2->creator_id  = $this->user->id;
        $this->card2->last_name   = "Kitsune";
        $this->card2->first_name  = "Yasu";
        $this->card2->street      = "Foxstreet 10";
        $this->card2->postcode    = "12345";
        $this->card2->city        = "Foxhole";
        $this->card2->comment     = "Comment";
        $this->card2->valid_from  = "2022-07-04 12:00:00";
        $this->card2->valid_until = "2022-07-04 12:00:00";
        $this->card2->save();

        $this->person2              = new Person();
        $this->person2->instance_id = $this->instance->id;
        $this->person2->card_id     = $this->card->id;
        $this->person2->gender      = "male";
        $this->person2->age         = 18;
        $this->person2->save();

        $this->limitationSet2              = new LimitationSet();
        $this->limitationSet2->instance_id = $this->instance->id;
        $this->limitationSet2->name        = "A set to limit them all ~ Tolkien II";
        $this->limitationSet2->valid_from  = "2022-08-04 12:00:00";
        $this->limitationSet2->valid_until = "2022-08-04 12:00:00";
        $this->person2->limitationSets()->save($this->limitationSet2);

        $this->card3              = new Card;
        $this->card3->instance_id = $this->instance->id;
        $this->card3->creator_id  = $this->user->id;
        $this->card3->last_name   = "Kitsune";
        $this->card3->first_name  = "Yasu";
        $this->card3->street      = "Foxstreet 10";
        $this->card3->postcode    = "12345";
        $this->card3->city        = "Foxhole";
        $this->card3->comment     = "Comment";
        $this->card3->valid_from  = Carbon::tomorrow();
        $this->card3->valid_until = Carbon::tomorrow();
        $this->card3->save();

        $this->person3              = new Person();
        $this->person3->instance_id = $this->instance->id;
        $this->person3->card_id     = $this->card->id;
        $this->person3->gender      = "male";
        $this->person3->age         = 18;
        $this->person3->save();

        $this->limitationSet3              = new LimitationSet();
        $this->limitationSet3->instance_id = $this->instance->id;
        $this->limitationSet3->name        = "A set to limit them all ~ Tolkien II";
        $this->limitationSet3->valid_from  = "2022-08-04 12:00:00";
        $this->limitationSet3->valid_until = "2022-08-04 12:00:00";
        $this->person3->limitationSets()->save($this->limitationSet3);

        $this->productType              = new ProductType();
        $this->productType->instance_id = $this->instance->id;
        $this->productType->name        = "name";
        $this->productType->icon        = "icon";
        $this->productType->save();

        $this->limitation                    = new Limitation();
        $this->limitation->instance_id       = $this->instance->id;
        $this->limitation->product_type_id   = $this->productType->id;
        $this->limitation->limitation_set_id = $this->limitationSet->id;
        $this->limitation->limit             = 5;
        $this->limitation->save();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_checkout()
    {
        $response = $this->actingAs($this->user)
            ->get('api/card/visit/' . $this->card->id)
            ->assertJsonStructure([
                "card" => [
                    "id",
                    "last_name",
                    "first_name",
                    "street",
                    "postcode",
                    "city",
                    "valid_from",
                    "valid_until",
                    "creator_id",
                    "comment",
                    "created_at",
                    "updated_at"
                ],
                "persons" => [
                    [
                        "id",
                        "gender",
                        "age",
                        "created_at",
                        "updated_at",
                        "limitation_states" => [
                            [
                                "product_type" => [
                                    "id",
                                    "name",
                                    "icon"
                                ],
                                "limit",
                                "used"
                            ]
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
    public function test_show_checkout_expired()
    {
        $response = $this->actingAs($this->user)
            ->get('api/card/visit/' . $this->card2->id)
            ->assertStatus(410);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_checkout_not_valid()
    {
        $response = $this->actingAs($this->user)
            ->get('api/card/visit/' . $this->card3->id)
            ->assertStatus(423);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_checkout()
    {
        $payload = [
            'lineItems' => [
                [
                    'person_id' => $this->person->id,
                    'product_type_id' => $this->productType->id,
                    'amount' => 5,
                ]
            ]
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/card/visit/' . $this->card->id, $payload)
            ->assertSuccessful();
    }
}
