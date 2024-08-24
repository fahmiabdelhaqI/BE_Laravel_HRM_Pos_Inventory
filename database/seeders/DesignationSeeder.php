<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a designation
        \App\Models\Designation::create([
            'company_id' => 1,
            'created_by' => 1,
            'name' => 'Software Engineer',
            'description' => 'Software Engineer',
        ]);

        \App\Models\Designation::create([
            'company_id' => 1,
            'created_by' => 1,
            'name' => 'HR Manager',
            'description' => 'HR Manager',
        ]);
    }
}
