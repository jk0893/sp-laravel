<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Bus;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{

    protected $fillable = [
        'user_id',
        'bus_id',
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {        
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'father_name'=> $this->faker->firstName,
            'birth_date' => $this->faker->date,
            'passport' => random_int(1000000000, 9999999999),
            'phone'=> $this->faker->phoneNumber,
            'user_id'=> User::all()->random()->id,
            'bus_id' => Bus::all()->random()->id,
        ];
    }
}
