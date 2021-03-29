<?php

namespace Database\Seeders;

use App\Models\Category;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);

        $dev = Role::create(['guard_name' => 'web','name'=>'dev']);
        $client = Role::create(['guard_name' => 'web','name'=>'client']);

        $permission1 = Permission::create(['guard_name' => 'web','name' => 'create_app']);
        $permission2 = Permission::create(['guard_name' => 'web','name' => 'edit_app']);
        $permission3 = Permission::create(['guard_name' => 'web','name' => 'delete_app']);
        $permission4 = Permission::create(['guard_name' => 'web','name' => 'list_apps']);
        $permission5 = Permission::create(['guard_name' => 'web','name' => 'show_apps_categories']);
        $permission6 = Permission::create(['guard_name' => 'web','name' => 'show_app']);

        $permission1->assignRole($dev);
        $permission2->assignRole($dev);
        $permission3->assignRole($dev);
        $permission4->assignRole($client);
        $permission5->assignRole($client);
        $permission6->assignRole($client);


    }
}
