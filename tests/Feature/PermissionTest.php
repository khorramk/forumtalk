<?php

namespace Tests\Feature;

use App\Models\Permission;
use Database\Seeders\PermissionSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class PermissionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_whether_correct_permission_has_been_set_in_database(): void
    {
        $this->seed(PermissionSeeder::class);


        

        $this->assertDatabaseHas(Permission::class, ['name' => 'user.view']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'user.create']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'user.update']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'user.delete']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'user.restore']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'user.forceDelete']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'user.approve']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'registration.approve']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'question.publish']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'question.create']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'question.update']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'question.delete']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'question.forceDelete']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'comments.approve']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'comments.reject']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'forum.lead']);
        $this->assertDatabaseHas(Permission::class, ['name' => 'answers.reply']);
        $this->assertDatabaseMissing(Permission::class, ['name' => '.view']);
    }
}
