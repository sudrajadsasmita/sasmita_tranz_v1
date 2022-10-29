<?php

namespace Database\Seeders;

use App\Models\MaTripStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaTripStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaTripStatus::insert([
            [
                'name' => 'Coming Soon',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Being Picked Up',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Arrived Location Pick Up',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'On Trip',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Finished Trip',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
        ]);
    }
}
