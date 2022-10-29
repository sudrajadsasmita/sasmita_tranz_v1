<?php

namespace Database\Seeders;

use App\Models\MaRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaRole::insert([
            [
                'name' => 'superadmin',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'driver',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'helper',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'customer',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
        ]);
    }
}
