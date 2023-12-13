<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Bus;
use App\Models\Employee;
use App\Models\BusModel;
use App\Models\BusMark;
use App\Models\BusRoute;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        BusModel::factory(50)->create();
        BusMark::factory(50)->create();
        BusRoute::factory(50)->create();
        Bus::factory(50)->create();
        User::factory(50)->has(Employee::factory())->create();
    }
}
