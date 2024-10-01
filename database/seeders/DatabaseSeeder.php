<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed emp_acc table with first entry

        DB::table('emp_acc')->insert([
            'empid' => '11-0072',
            'empuser' => 'mnartiaga',
            'emppass' => Hash::make('artiaga@2023'),
            'empmail' => 'mnpartiaga03450@usep.edu.ph',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
