<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Countrymdl;

class Countryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Countrymdl::insert([
            ['name' => 'USA'],
            ['name' => 'Canada'],
            ['name' => 'India'],
            ['name' => 'Australia'],
            ['name' => 'Germany'],
        ]);
    }
}
