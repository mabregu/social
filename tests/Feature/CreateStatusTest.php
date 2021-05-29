<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateStatusTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function a_authenticated_user_can_create_statuses()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();
        $this->actingAs($user);

        $this->post(route('statuses.store', ['body' => 'Mi primer status']));

        $this->assertDatabaseHas('statuses', [
            'body' => 'Mi primer status'
        ]);
    }
}
