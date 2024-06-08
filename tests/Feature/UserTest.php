<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_shows_the_user_index_page()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('users.index'));

        $response->assertStatus(200);
        $response->assertViewIs('user.index');
    }

    /** @test */
    public function it_displays_create_user_form()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('users.create'));

        $response->assertStatus(200);
        $response->assertViewIs('user.create');
    }

    /** @test */
    public function it_creates_a_new_user()
    {
        $user = User::factory()->create();

        $userData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ];

        $response = $this->actingAs($user)->post(route('users.store'), $userData);

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseHas('users', ['email' => 'test@example.com']);
    }

    /** @test */
    public function it_displays_edit_user_form()
    {
        $user = User::factory()->create();
        $anotherUser = User::factory()->create();

        $response = $this->actingAs($user)->get(route('users.edit', $anotherUser->id));

        $response->assertStatus(200);
        $response->assertViewIs('user.edit');
    }

    /** @test */
    public function it_updates_a_user()
    {
        $user = User::factory()->create();
        $anotherUser = User::factory()->create();

        $updateData = [
            'name' => 'Updated Name',
            'email' => 'updated@example.com',
        ];

        $response = $this->actingAs($user)->put(route('users.update', $anotherUser->id), $updateData);

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseHas('users', ['email' => 'updated@example.com']);
    }

    /** @test */
    public function it_deletes_a_user()
    {
        $user = User::factory()->create();
        $anotherUser = User::factory()->create();

        $response = $this->actingAs($user)->delete(route('users.destroy', $anotherUser->id));

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseMissing('users', ['id' => $anotherUser->id]);
    }

    /** @test */
    public function it_downloads_user_pdf()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('users.downloadPdf'));

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
    }
}
