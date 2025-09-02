<?php

namespace Database\Factories;

use App\Models\Recrutment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recrutment>
 */
class RecrutmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Recrutment::class;

    public function definition(): array
    {
        return [
            'nim'        => $this->faker->unique()->numerify('1925####'),
            'name'       => $this->faker->name(),
            'semester'   => $this->faker->randomElement(['Semester 1', 'Semester 2', 'Semester 3', 'Semester 4']),
            'ektm'       => 'default.png', 
            'email'      => $this->faker->unique()->userName() . '@gmail.com',
            'instagram'  => $this->faker->userName(),
            'no_wa'      => '62' . $this->faker->numerify('8##########'),
            'description'=> $this->faker->sentence(15),
            'branch_id'  => $this->faker->numberBetween(1, 10),
            'follow_dpc' => 'default.png',
            'cv'         => null,
            'status_id'  => 1,
        ];
    }
}
