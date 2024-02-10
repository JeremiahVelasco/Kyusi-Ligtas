<?php

namespace Database\Seeders;

use App\Models\Incident;
use App\Models\IncidentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncidentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['title' => 'Fire Emergency'],
            ['title' => 'Police Emergency'],
            ['title' => 'Medical Emergency'],
        ];

        foreach ($types as $type) {
            IncidentType::create([
                'title' => $type['title']
            ]);
        }
    }
}
