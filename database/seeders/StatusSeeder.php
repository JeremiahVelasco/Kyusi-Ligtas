<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            ['title' => 'On Going'],
            ['title' => 'Cancelled'],
            ['title' => 'Done'],
        ];

        foreach ($status as $status) {
            Status::create([
                'title' => $status['title']
            ]);
        }
    }
}
