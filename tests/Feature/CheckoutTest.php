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
    private $limitationSetExpired;
    private $limitationSetNotValid;
    private $productType;
    private $limitation;
    private $person;
    private $personExpired;
    private $personNotValid;
    private $card;
    private $cardExpired;
    private $cardNotValid;

    protected function setUp(): void
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

        $this->cardExpired              = new Card;
        $this->cardExpired->instance_id = $this->instance->id;
        $this->cardExpired->creator_id  = $this->user->id;
        $this->cardExpired->last_name   = "Kitsune";
        $this->cardExpired->first_name  = "Yasu";
        $this->cardExpired->street      = "Foxstreet 10";
        $this->cardExpired->postcode    = "12345";
        $this->cardExpired->city        = "Foxhole";
        $this->cardExpired->comment     = "Comment";
        $this->cardExpired->valid_from  = "2022-07-04 12:00:00";
        $this->cardExpired->valid_until = "2022-07-04 12:00:00";
        $this->cardExpired->save();

        $this->personExpired              = new Person();
        $this->personExpired->instance_id = $this->instance->id;
        $this->personExpired->card_id     = $this->card->id;
        $this->personExpired->gender      = "male";
        $this->personExpired->age         = 18;
        $this->personExpired->save();

        $this->limitationSetExpired              = new LimitationSet();
        $this->limitationSetExpired->instance_id = $this->instance->id;
        $this->limitationSetExpired->name        = "A set to limit them all ~ Tolkien II";
        $this->limitationSetExpired->valid_from  = "2022-08-04 12:00:00";
        $this->limitationSetExpired->valid_until = "2022-08-04 12:00:00";
        $this->personExpired->limitationSets()->save($this->limitationSetExpired);

        $this->cardNotValid              = new Card;
        $this->cardNotValid->instance_id = $this->instance->id;
        $this->cardNotValid->creator_id  = $this->user->id;
        $this->cardNotValid->last_name   = "Kitsune";
        $this->cardNotValid->first_name  = "Yasu";
        $this->cardNotValid->street      = "Foxstreet 10";
        $this->cardNotValid->postcode    = "12345";
        $this->cardNotValid->city        = "Foxhole";
        $this->cardNotValid->comment     = "Comment";
        $this->cardNotValid->valid_from  = Carbon::tomorrow();
        $this->cardNotValid->valid_until = Carbon::tomorrow();
        $this->cardNotValid->save();

        $this->personNotValid              = new Person();
        $this->personNotValid->instance_id = $this->instance->id;
        $this->personNotValid->card_id     = $this->card->id;
        $this->personNotValid->gender      = "male";
        $this->personNotValid->age         = 18;
        $this->personNotValid->save();

        $this->limitationSetNotValid              = new LimitationSet();
        $this->limitationSetNotValid->instance_id = $this->instance->id;
        $this->limitationSetNotValid->name        = "A set to limit them all ~ Tolkien II";
        $this->limitationSetNotValid->valid_from  = "2022-08-04 12:00:00";
        $this->limitationSetNotValid->valid_until = "2022-08-04 12:00:00";
        $this->personNotValid->limitationSets()->save($this->limitationSetNotValid);

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
     * Test positive behavior of show checkout
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
     * Test positive behavior of show checkout if expired
     *
     * @return void
     */
    public function test_show_checkout_expired()
    {
        $response = $this->actingAs($this->user)
            ->get('api/card/visit/' . $this->cardExpired->id)
            ->assertStatus(410);
    }

    /**
     * Test positive behavior of show checkout if not valid
     *
     * @return void
     */
    public function test_show_checkout_not_valid()
    {
        $response = $this->actingAs($this->user)
            ->get('api/card/visit/' . $this->cardNotValid->id)
            ->assertStatus(423);
    }

    /**
     * Test positive behavior of create checkout
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
