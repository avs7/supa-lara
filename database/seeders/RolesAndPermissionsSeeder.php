<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Define all available apps (inline)
        $apps = [
            'notes',
            'signings',
            'tasks',
            'lists',
        ];

        // Create 1 permission per app
        foreach ($apps as $app) {
            Permission::firstOrCreate(['name' => "access_{$app}"]);
        }

        // Define roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $family = Role::firstOrCreate(['name' => 'family']);
        $standard = Role::firstOrCreate(['name' => 'standard']);

        // Assign permissions to roles
        $admin->syncPermissions(Permission::all());

        $family->syncPermissions([
            'access_notes',
            'access_tasks',
            'access_lists',
            'access_signings',
        ]);

        $standard->syncPermissions([
            'access_notes',
            'access_tasks',
            'access_lists',
        ]);
    }
}
