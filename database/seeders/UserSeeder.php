<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminRole = Role::firstOrCreate(['name' => 'super-admin']);

        $policyFiles = File::files(app_path('Policies'));

        foreach ($policyFiles as $file) {
            $className = pathinfo($file, PATHINFO_FILENAME);
            $resource = strtolower(str_replace('Policy', '', $className));

            $actions = [
                'view_any', 'view', 'create', 'update', 'delete', 
                'delete_any', 'force_delete', 'force_delete_any', 
                'restore', 'restore_any', 'replicate', 'reorder'
            ];

            foreach ($actions as $action) {
                $permissionName = "{$action}_{$resource}";
                $permission = Permission::firstOrCreate(['name' => $permissionName]);
                $superAdminRole->givePermissionTo($permission);
            }
        }

        $user = User::create([
            "id" => 1,
            'name' => 'Admin',
            'email' => "admin@gmail.com",
            'position' => "DPP",
            'password' => bcrypt('P@ssw0rdHimsi'),  
        ]);

        $user->assignRole($superAdminRole->name);
    }
}