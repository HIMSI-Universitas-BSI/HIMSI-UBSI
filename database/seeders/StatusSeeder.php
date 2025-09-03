<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            ['id' => 1, 'name' => 'Belum Diverifikasi'],
            ['id' => 2, 'name' => 'Terverifikasi'],
        ]);
    }
}
