<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'service-list',
            'service-create',
            'service-edit',
            'service-delete',
            'car-list',
            'car-create',
            'car-edit',
            'car-delete',
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
            'about-list',
            'about-edit',
            'about-delete',
            'settings',
        ];

        foreach ($permissions as $permission) Permission::create(['name' => $permission]);
    }
}
