<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class SampleAccounts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create(); // Create a Faker instance

        // seeding admin
        $teacher = User::create([
            'name' => 'Kevs404',
            'email' => 'admin@sample.com',
            'password' => Hash::make('12345'),
            'role' => 'teacher',
        ]);

    }
}
