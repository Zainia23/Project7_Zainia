<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Zainia Zahrotul Warda',
                'lastname' => 'Nia',
                'email'=> 'zainiazahrotul@gmail.com',
                'age' => 22,
                'position_id' => 1
            ],
            [
                'firstname' => 'Putri',
                'lastname' => 'Alastari',
                'email'=> 'putri.38@gmail.com',
                'age' => 23,
                'position_id' => 2
            ],
            [
                'firstname' => 'Santia Asmara',
                'lastname' => 'Santia',
                'email'=> 'santia.asmara@gmail.com',
                'age' => 23,
                'position_id' => 3
            ],
        ]);
    }
}
