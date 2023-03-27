<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory(1)->create([
            'name' => 'Salah',
            'username' => 'salahjettioui',
            'email' => 'test@example.com',
            'teacher' => 1,
            'is_admin' => 1,
        ]);

        \App\Models\User::factory(1)->create([
            'name' => 'Ayoub Boudiba',
            'username' => 'yubie',
            'email' => 'test2@example.com',
            'teacher' => 0,
        ]);

        \App\Models\Course::factory(10)->create(
            ['by_user_id' => 1]
        );
        \App\Models\Course::factory(10)->create(
            ['by_user_id' => 2]
        );
    }
}
