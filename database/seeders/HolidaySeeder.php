<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a holiday
        \App\Models\Holiday::create([
            'company_id'=> 1,
            'name' => 'New Year',
            'date' => '2025-01-01',
            'month' => 1,
            'year' => 2025,
            'is_weekend' => 1,
            'created_by' => 1,
        ]);
    }
}
