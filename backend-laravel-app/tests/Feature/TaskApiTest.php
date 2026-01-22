<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class TaskApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authenticated_user_can_list_their_tasks()
    {
        $user = User::factory()->create();
        Task::factory()->count(3)->create(['user_id' => $user->id]);
        Task::factory()->count(2)->create(); // tasks for other users

        Sanctum::actingAs($user);

        $response = $this->getJson('/api/tasks');

        $response->assertStatus(200);
        $response->assertJsonFragment(['total' => 3], false);
    }

    /** @test */
    public function authenticated_user_can_create_task()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $payload = [
            'title' => 'Write tests',
            'description' => 'Add feature tests for tasks',
            'completed' => false,
        ];

        $response = $this->postJson('/api/tasks', $payload);

        $response->assertStatus(201)
                 ->assertJsonPath('data.title', 'Write tests');

        $this->assertDatabaseHas('tasks', [
            'title' => 'Write tests',
            'user_id' => $user->id,
        ]);
    }

    /** @test */
    public function user_cannot_view_another_users_task()
    {
        $user = User::factory()->create();
        $other = User::factory()->create();

        $task = Task::factory()->create(['user_id' => $other->id]);

        Sanctum::actingAs($user);

        $this->getJson("/api/tasks/{\$task->id}")->assertStatus(403);
    }

    /** @test */
    public function user_can_update_their_task()
    {
        $user = User::factory()->create();
        $task = Task::factory()->create(['user_id' => $user->id, 'title' => 'Old title']);

        Sanctum::actingAs($user);

        $this->putJson("/api/tasks/{\$task->id}", ['title' => 'New title'])
             ->assertStatus(200)
             ->assertJsonPath('data.title', 'New title');

        $this->assertDatabaseHas('tasks', ['id' => $task->id, 'title' => 'New title']);
    }

    /** @test */
    public function user_can_delete_their_task()
    {
        $user = User::factory()->create();
        $task = Task::factory()->create(['user_id' => $user->id]);

        Sanctum::actingAs($user);

        $this->deleteJson("/api/tasks/{\$task->id}")->assertStatus(204);

        $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
    }
}