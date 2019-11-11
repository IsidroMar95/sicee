<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'name'              => 'Introducción a la computación',
            'grade_level_id'    => 1,
            'career_id'         => 1,
            'teacher_id'        => 1,
            'school_period_id'  => 1,
        ]);

        Subject::create([
            'name'              => 'Sistemas operativos I',
            'grade_level_id'    => 10,
            'career_id'         => 1,
            'teacher_id'        => 1,
            'school_period_id'  => 10,
        ]);

        Subject::create([
            'name' => 'Lógica de Programación',
            'grade_level_id'    => 1,
            'career_id'         => 1,
            'teacher_id'        => 3,
            'school_period_id'  => 1,
        ]);

        Subject::create([
            'name'              => 'Bases de Datos I',
            'grade_level_id'    => 6,
            'career_id'         => 1,
            'teacher_id'        => 2,
            'school_period_id'  => 6,
        ]);
    }
}
