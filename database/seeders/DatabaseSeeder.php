<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //create a district
        \App\Models\District::factory()->create([
            'district_number' => '3220',
            'drr_name' => 'Ahamed',
            'drs_name' => 'Danica',
            'description' => 'Wonderful 3220'
        ]);

        \App\Models\User::factory()->create([
             'name' => 'Super Admin',
             'email' => 'ahamed@rsamdio.org',
             'password' => bcrypt('password'),
             'user_type' => 'admin',
             'district_id' => 1,
        ]);
    }
}
