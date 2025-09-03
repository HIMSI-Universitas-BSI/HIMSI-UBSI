<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultPoster = 'default-poster.jpg';

        $data = [
            ['name' => 'DPC BSD', 'location' => 'BSD, Tangerang Selatan', 'grup_wa' => 'https://chat.whatsapp.com/DD7fue3sDAf6Zv6bRoQQs5?mode=ems_wa_t', 'sektor' => 'sektor_barat'],
            ['name' => 'DPC Cengkareng', 'location' => 'Cengkareng, Jakarta Barat', 'grup_wa' => 'https://chat.whatsapp.com/KFGx00FPeZF89qk8scg6Od?mode=ems_copy_t', 'sektor' => 'sektor_barat'],
            ['name' => 'DPC Slipi', 'location' => 'Slipi, Jakarta Barat', 'grup_wa' => 'https://chat.whatsapp.com/JpLiyhPGMrDD90JX7eAPa7?mode=ems_copy_c', 'sektor' => 'sektor_barat'],
            ['name' => 'DPC Cimone', 'location' => 'Cimone, Tangerang Kota', 'grup_wa' => 'https://chat.whatsapp.com/HKDof7DhZbd2wDzrygxGlV?mode=ems_copy_c', 'sektor' => 'sektor_barat'],
            ['name' => 'DPC Samudra', 'location' => 'Kramat, Jakarta Pusat', 'grup_wa' => 'https://chat.whatsapp.com/KXyGLKPd4Jv8sWdaXXOf1L?mode=ems_copy_c', 'sektor' => 'sektor_tengah'],
            ['name' => 'DPC Marwati', 'location' => 'Depok, Jawa Barat', 'grup_wa' => 'https://chat.whatsapp.com/GvJEDOXX9m3HyguKWaL4A7?mode=ems_copy_t', 'sektor' => 'sektor_tengah'],
            ['name' => 'DPC Kaliabang', 'location' => 'Bekasi, Jawa Barat', 'grup_wa' => 'https://chat.whatsapp.com/FtAs6PDUPsTFZ7zRar6VjB?mode=ems_copy_c', 'sektor' => 'sektor_timur'],
            ['name' => 'DPC Cikarang', 'location' => 'Cikarang, Jawa Barat', 'grup_wa' => '', 'sektor' => 'sektor_timur'],
            ['name' => 'DPC Kalimalang', 'location' => 'Kalimalang, Jakarta Timur', 'grup_wa' => '', 'sektor' => 'sektor_timur'],
            ['name' => 'DPC Jatiwaringin', 'location' => 'Pondok Gede, Jakarta Timur', 'grup_wa' => 'https://chat.whatsapp.com/FHQ0SDXBGXj1qS30AeXh43?mode=ems_copy_c', 'sektor' => 'sektor_timur'],
        ];

        $data = array_map(function ($row) use ($defaultPoster) {
            $row['poster'] = $defaultPoster;
            $row['description'] = null;
            return $row;
        }, $data);

        DB::table('branch')->insert($data);

        // ambil role id 2
        $role = Role::find(2);

        // buat user untuk setiap branch
        foreach ($data as $row) {
            $password = Str::random(16);

            $user = User::create([
                'name'     => 'Admin ' . ($row['name']),
                'email'    => Str::slug($row['name'], '') . '@gmail.com',
                'position' => 'DPC',
                'password' => Hash::make($password),
            ]);

            if ($role) {
                $user->assignRole($role->name);
            }

            $this->command->info("Akun telah di buat: User {$user->email} dibuat, password: {$password}");
        }
    }
}
