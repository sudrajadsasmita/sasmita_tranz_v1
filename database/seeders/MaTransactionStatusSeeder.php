<?php

namespace Database\Seeders;

use App\Models\MaTransactionStatus;
use Illuminate\Database\Seeder;

class MaTransactionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaTransactionStatus::insert([
            [
                'name' => 'PENDING',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'PROCESS',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'REJECT',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'SUCCESS',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
        ]);
    }
}
