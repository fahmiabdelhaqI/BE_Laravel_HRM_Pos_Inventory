<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BasicSalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a basic salary
        \App\Models\BasicSalary::create([
            'company_id' =>1,
            'user_id' => 1,
            'basic_salary' => 5000000.00,
        ]);

        \App\Models\BasicSalary::create([
            'company_id' =>1,
            'user_id' => 2,
            'basic_salary' => 7000000.00,
        ]);
    }
}
