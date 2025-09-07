<?php

namespace Database\Seeders;

use App\Models\Recrutment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecrutmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recrutment::factory()->count(150)->create();
    }
}
