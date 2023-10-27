<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\GroupSeeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\TeacherSeeder;
use Database\Seeders\UsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
            GroupSeeder::class
        ]);
    }
}
