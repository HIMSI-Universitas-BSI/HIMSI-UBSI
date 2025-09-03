<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            "id" => 1,
            'name' => 'Admin',
            'email' => "admin@gmail.com",
            'position' => "DPP",
            'password' => bcrypt('P@ssw0rdHimsi'),  
        ]);

        $role = Role::firstOrCreate(['name' => 'super-admin']);
        $user->assignRole($role->name); 
    }
}
