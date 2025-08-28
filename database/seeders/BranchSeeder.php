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
        $defaultImage = json_encode(['default-image1.jpg', 'default-image2.jpg']);

        $data = [
            ['name' => 'DPC BSD', 'location' => 'BSD, Tangerang Selatan'],
            ['name' => 'DPC Cengkareng', 'location' => 'Cengkareng, Jakarta Barat'],
            ['name' => 'DPC Slipi', 'location' => 'Slipi, Jakarta Barat'],
            ['name' => 'DPC Cimone', 'location' => 'Cimone, Tangerang Kota'],
            ['name' => 'DPC Samudra', 'location' => 'Kramat, Jakarta Pusat'],
            ['name' => 'DPC Marwati', 'location' => 'Depok, Jawa Barat'],
            ['name' => 'DPC Kaliabang', 'location' => 'Bekasi, Jawa Barat'],
            ['name' => 'DPC Cikarang', 'location' => 'Cikarang, Jawa Barat'],
            ['name' => 'DPC Kalimalang', 'location' => 'Kalimalang, Jakarta Timur'],
            ['name' => 'DPC Jatiwaringin', 'location' => 'Pondok Gede, Jakarta Timur'],
        ];

        foreach ($data as &$row) {
            $row['poster'] = $defaultPoster;
            $row['image'] = $defaultImage;
            $row['description'] = null;
        }

        DB::table('branch')->insert($data);
    }
}
