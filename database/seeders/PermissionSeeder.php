<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createEachPermission(Permission::$userResource, Permission::$userActions);
        $this->createEachPermission(Permission::$commentsResource, Permission::$commentsActions);
        $this->createEachPermission(Permission::$questionResources, Permission::$questionActions);
        $this->createEachPermission(Permission::$forumResources, Permission::$forumActions);
        $this->createEachPermission(Permission::$answerResources, Permission::$answerActions);
        $this->createEachPermission(Permission::$registrationResources, Permission::$registrationActions);
    
    
        
    }


    /**
     * @param array $resources
     * @param array $actions
     * @return void
     */
    public function createEachPermission(array $resources, array $actions): void
    {
        collect($resources)
            ->crossJoin($actions)
            ->map(function ($set) {
                return implode('.', $set);
            })->each(function ($permission) {
                Permission::create(['name' => $permission]);
            });
    }

    
}
