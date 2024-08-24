<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a role
        \App\Models\Role::create([
            'company_id'=>1,
            'name'=>'admin',
            'display_name'=>'Admin',
            'description'=>'Admin role',
        ]);

        \App\Models\Role::create([
            'company_id'=>1,
            'name'=>'staff',
            'display_name'=>'Staff',
            'description'=>'Staff role',
        ]);
    }
}
