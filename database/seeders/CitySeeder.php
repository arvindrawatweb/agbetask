<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            ['name' => 'Los Angeles', 'state_id' => 1],
            ['name' => 'San Francisco', 'state_id' => 1],
            ['name' => 'Houston', 'state_id' => 2],
            ['name' => 'Dallas', 'state_id' => 2],
            ['name' => 'Toronto', 'state_id' => 3],
            ['name' => 'Ottawa', 'state_id' => 3],
            ['name' => 'Mumbai', 'state_id' => 4],
            ['name' => 'Pune', 'state_id' => 4],
            ['name' => 'New Delhi', 'state_id' => 5],
            ['name' => 'Gurgaon', 'state_id' => 5],
            ['name' => 'Noida', 'state_id' => 6],
            ['name' => 'Sydney', 'state_id' => 7],
            ['name' => 'Newcastle', 'state_id' => 7],
            ['name' => 'Munich', 'state_id' => 8],
            ['name' => 'Nuremberg', 'state_id' => 8],
        ]);
    }
}
