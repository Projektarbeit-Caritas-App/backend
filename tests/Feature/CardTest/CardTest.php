<?php

namespace Tests\Feature\CardTest;

use App\Models\Card;
use App\Models\Instance;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

abstract class CardTest extends TestCase
{
    use DatabaseTransactions;

    protected $instance;
    protected $organization;
    protected $user;
    protected $card;

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
    }
}
