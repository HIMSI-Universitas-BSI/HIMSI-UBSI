<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            ['name' => 'DPC BSD', 'location' => 'BSD, Tangerang Selatan', 'grup_wa' => 'https://chat.whatsapp.com/DD7fue3sDAf6Zv6bRoQQs5?mode=ems_wa_t'],
            ['name' => 'DPC Cengkareng', 'location' => 'Cengkareng, Jakarta Barat', 'grup_wa' => 'https://chat.whatsapp.com/KFGx00FPeZF89qk8scg6Od?mode=ems_copy_t'],
            ['name' => 'DPC Slipi', 'location' => 'Slipi, Jakarta Barat', 'grup_wa' => 'https://chat.whatsapp.com/JpLiyhPGMrDD90JX7eAPa7?mode=ems_copy_c'],
            ['name' => 'DPC Cimone', 'location' => 'Cimone, Tangerang Kota', 'grup_wa' => 'https://chat.whatsapp.com/HKDof7DhZbd2wDzrygxGlV?mode=ems_copy_c'],
            ['name' => 'DPC Samudra', 'location' => 'Kramat, Jakarta Pusat', 'grup_wa' => 'https://chat.whatsapp.com/KXyGLKPd4Jv8sWdaXXOf1L?mode=ems_copy_c'],
            ['name' => 'DPC Marwati', 'location' => 'Depok, Jawa Barat', 'grup_wa' => 'https://chat.whatsapp.com/GvJEDOXX9m3HyguKWaL4A7?mode=ems_copy_t'],
            ['name' => 'DPC Kaliabang', 'location' => 'Bekasi, Jawa Barat', 'grup_wa' => 'https://chat.whatsapp.com/FtAs6PDUPsTFZ7zRar6VjB?mode=ems_copy_c'],
            ['name' => 'DPC Cikarang', 'location' => 'Cikarang, Jawa Barat', 'grup_wa' => ''],
            ['name' => 'DPC Kalimalang', 'location' => 'Kalimalang, Jakarta Timur', 'grup_wa' => ''],
            ['name' => 'DPC Jatiwaringin', 'location' => 'Pondok Gede, Jakarta Timur', 'grup_wa' => 'https://chat.whatsapp.com/FHQ0SDXBGXj1qS30AeXh43?mode=ems_copy_c'],
        ];

        foreach ($data as &$row) {
            $row['poster'] = $defaultPoster;
            $row['description'] = null;
        }

        DB::table('branch')->insert($data);
    }
}
