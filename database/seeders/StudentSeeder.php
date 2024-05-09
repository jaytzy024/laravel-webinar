<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Students::create([
            'student_id' => '20200282-N',
            'first_name' => 'Andrei Kevin',
            'last_name' => 'Casoco',
            'course' => 'BSIS',
        ]);
    }
}
