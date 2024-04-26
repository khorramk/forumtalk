<?php

namespace Tests\Feature;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RoleUser;
use App\RoleName;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\RoleSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class RoleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_role_set_properly(): void
    {
        $this->seed(PermissionSeeder::class);
       $this->seed(RoleSeeder::class);
       
       $permission = DB::table('permission_role')->where('role_id', 1)->get()->toArray();
       
       
       $this->assertDatabaseHas(Role::class, ['name' => RoleName::ADMIN->value]);
       $this->assertDatabaseHas('permission_role', ['role_id' => 1]);
    }
}
