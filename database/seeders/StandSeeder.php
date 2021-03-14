<?php

namespace Database\Seeders;

use App\Models\Stand;
use Illuminate\Database\Seeder;

class StandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Stand::factory()
        ->count(25)
        ->create();
    }
}
