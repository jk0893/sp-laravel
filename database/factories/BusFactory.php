<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BusModel;
use App\Models\BusMark;
use App\Models\BusRoute;
use App\Models\Status;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus>
 */
class BusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bus_model_id' => BusModel::get()->random()->id,
            'bus_mark_id' => BusMark::get()->random()->id,
            'bus_route_id' => BusRoute::get()->random()->id,
            'status_id'=> Status::get()->random()->id,
        ];
    }
}
