<?php

namespace Tests\Feature\VisitTest;

use App\Models\Visit;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;

class VisitInstanceManagerTest extends VisitTest
{
    protected function setUp(): void
    {
        parent::setUp();
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
            ->assertJsonStructure([
                "id",
                "card_id",
                "user_id",
                "created_at",
                "updated_at"
            ])
            ->assertSuccessful();
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
            ->assertJsonStructure([
                "items" => [
                    [
                        "id",
                        "card_id",
                        "user_id",
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
            ->assertSuccessful();

        assertEquals(2, Visit::count());
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
            ->assertSuccessful();

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
            ->assertSuccessful();

        assertFalse(Visit::exists());
    }
}
