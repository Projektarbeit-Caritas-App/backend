<?php

namespace Tests\Feature\VisitTest;

use function PHPUnit\Framework\assertEquals;

class VisitExternalManagerTest extends VisitTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->user->syncRoles('external_manager');
    }

    /**
     * Test positive behavior of show visit
     *
     * @return void
     */
    public function test_show_visit()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/visit/' . $this->visit->id)
            ->assertForbidden();
    }

    /**
     * Test positive behavior of index visit
     *
     * @return void
     */
    public function test_index_visit()
    {
        $response = $this->actingAs($this->user)
            ->get('/api/admin/visit/')
            ->assertForbidden();
    }

    /**
     * Test positive behavior of create visit
     *
     * @return void
     */
    public function test_create_visit()
    {
        $payload = [
            'card_id' => $this->card->id,
            'user_id' => $this->user->id
        ];

        $response = $this->actingAs($this->user)
            ->post('/api/admin/visit/', $payload)
            ->assertForbidden();
    }

    /**
     * Test positive behavior of update visit
     *
     * @return void
     */
    public function test_update_visit()
    {
        $payload = [
            'card_id' => $this->card->id,
            'user_id' => $this->user->id
        ];

        assertEquals($payload['card_id'], $this->visit->card_id);
        assertEquals($payload['user_id'], $this->visit->user_id);

        $response = $this->actingAs($this->user)
            ->put('/api/admin/visit/' . $this->visit->id, $payload)
            ->assertForbidden();

        $this->organization = $this->organization->refresh();
        assertEquals($payload['card_id'], $this->visit->card_id);
        assertEquals($payload['user_id'], $this->visit->user_id);
    }

    /**
     * Test positive behavior of delete visit
     *
     * @return void
     */
    public function test_delete_visit()
    {
        $response = $this->actingAs($this->user)
            ->delete('/api/admin/visit/' . $this->visit->id)
            ->assertForbidden();
    }
}
