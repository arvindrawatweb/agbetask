<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State; 

class StateSeeder extends Seeder
{
    public function run()
    {
        State::insert([
            ['name' => 'California', 'country_id' => 1],
            ['name' => 'Texas', 'country_id' => 1], 
            ['name' => 'Ontario', 'country_id' => 2], 
            ['name' => 'Maharashtra', 'country_id' => 3], 
            ['name' => 'Delhi', 'country_id' => 3], 
            ['name' => 'Noida', 'country_id' => 3], 
            ['name' => 'New South Wales', 'country_id' => 4], 
            ['name' => 'Bavaria', 'country_id' => 5], 
        ]);
    }
}
