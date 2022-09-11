<?php

namespace Tests\Feature\OrganizationTest;

use App\Models\Organization;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotEquals;
use function PHPUnit\Framework\assertTrue;

class OrganizationEmployeeTest extends OrganizationTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->user->syncRoles('employee');
    }

    /**
     * Test positive behavior of show organization
     *
     * @return void
     */
    public function test_show_organization()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/organization/' . $this->organization->id)
            ->assertForbidden();
    }

    /**
     * Test positive behavior of index organization
     *
     * @return void
     */
    public function test_index_organization()
    {
        $organization2 = new Organization;
        $organization2->name = "Organization Name";
        $organization2->street = "Organization Street";
        $organization2->postcode = "12345";
        $organization2->city = "Organization City";
        $organization2->contact = "Organization Contact";
        $this->instance->organizations()->save($organization2);

        $response = $this->actingAs($this->user)
            ->get('/api/admin/organization/')
            ->assertForbidden();
    }

    /**
     * Test positive behavior of create organization
     *
     * @return void
     */
    public function test_create_organization()
    {
        $payload = [
            'name' => 'Organization Name',
            'street' => "Organization Street",
            'postcode' => "12345",
            'city' => "Organization City",
            'contact' => "Organization Contact"
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/organization/', $payload)
            ->assertForbidden();

        assertEquals(1, Organization::count());
    }

    /**
     * Test positive behavior of update organization
     *
     * @return void
     */
    public function test_update_organization()
    {
        $payload = [
            'name' => 'Organization Name Updated',
            'street' => "Organization Street Updated",
            'postcode' => "12345 Updated",
            'city' => "Organization City Updated",
            'contact' => "Organization  UpdatedContact"
        ];

        assertNotEquals($payload['name'], $this->organization->name);
        assertNotEquals($payload['street'], $this->organization->street);
        assertNotEquals($payload['postcode'], $this->organization->postcode);
        assertNotEquals($payload['city'], $this->organization->city);
        assertNotEquals($payload['contact'], $this->organization->contact);

        $response = $this->actingAs($this->user)
            ->put('/api/admin/organization/' . $this->organization->id, $payload)
            ->assertForbidden();

        $this->organization = $this->organization->refresh();
        assertNotEquals($payload['name'], $this->organization->name);
        assertNotEquals($payload['street'], $this->organization->street);
        assertNotEquals($payload['postcode'], $this->organization->postcode);
        assertNotEquals($payload['city'], $this->organization->city);
        assertNotEquals($payload['contact'], $this->organization->contact);
    }

    /**
     * Test positive behavior of delete organization
     *
     * @return void
     */
    public function test_delete_organization()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/organization/' . $this->organization->id)
            ->assertForbidden();

        assertTrue(Organization::exists());
    }
}
