<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('count')->insert([
            [
                'name' => 'Tahun Berdiri',
                'digit'   => '2012',
                'active'   => true,
            ],
            [
                'name' => 'Cabang',
                'digit'   => '10',
                'active'   => true,
            ],
            [
                'name' => 'Divisi',
                'digit'   => '4',
                'active'   => true,
            ],
            [
                'name' => 'Anggota',
                'digit'   => '214',
                'active'   => true,
            ],
        ]);
    }
}
