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
            'name' => 'halas',
            'username' => 'halas',
            'email' => 'tes3t@example.com',
            'teacher' => 1,
            'is_admin' => 0,
        ]);

        \App\Models\User::factory(1)->create([
            'name' => 'Ayoub Boudiba',
            'username' => 'yubie',
            'email' => 'test2@example.com',
            'teacher' => 1,
        ]);

        \App\Models\User::factory(1)->create([
            'name' => 'Ghorba',
            'username' => 'ghorba',
            'email' => 'test3@example.com',
            'teacher' => 1,
        ]);
        \App\Models\Course::factory(5)->create(
            [
                'by_user_id' => 1,
                'category' => 'Mathematics',
                'Course_name' => 'Fonctions exponentielles',
                'Description' => 'Dans cette vidéo, je te propose de revoir tout le cours sur le chapitre de la fonction exponentielle.
L’objet de cette séquence est de te rappeler et de t’expliquer les éléments les plus importants du chapitre'
            ]
        );
        \App\Models\Course::factory(5)->create(
            [
                'by_user_id' => 2,
                'category' => 'Physics',
                'Course_name' => 'Ondes mécaniques progressives',
                'Description' => 'Dans cette vidéo, je te propose de revoir tout le cours sur le chapitre de les Ondes mécaniques progressives. L’objet de cette séquence est de te rappeler et de t’expliquer les éléments les plus importants du chapitre'
            ]
        );
        \App\Models\Course::factory(5)->create(
            [
                'by_user_id' => 3,
                'category' => 'SVT',
                'Course_name' => ' Consommation de la matière organique et flux d’énergie',
                'Description' => 'Dans cette vidéo, je te propose de revoir tout le cours sur le chapitre de la  Consommation de la matière organique et flux d’énergie. L’objet de cette séquence est de te rappeler et de t’expliquer les éléments les plus importants du chapitre'
            ]
        );
        \App\Models\Course::factory(5)->create(
            [
                'by_user_id' => 4,
                'category' => 'Physics',
                'Course_name' => 'Ondes mécaniques progressives',
                'Description' => 'Dans cette vidéo, je te propose de revoir tout le cours sur le chapitre de la Consommation de la matière organique et flux d’énergie. L’objet de cette séquence est de te rappeler et de t’expliquer les éléments les plus importants du chapitre'
            ]
        );
    }
}
