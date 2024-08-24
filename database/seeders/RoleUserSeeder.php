<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a role user
        \App\Models\RoleUser::create([
            'role_id' => 1,
            'user_id' => 1,
        ]);

        \App\Models\RoleUser::create([
            'role_id' => 2,
            'user_id' => 2,
        ]);

        \App\Models\RoleUser::create([
            'role_id' => 2,
            'user_id' => 1,
        ]);
    }
}
