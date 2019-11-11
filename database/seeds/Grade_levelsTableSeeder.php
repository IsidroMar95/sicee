<?php

use Illuminate\Database\Seeder;
use App\Grade_level;

class Grade_levelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Grade_level::create([
            'name'          => 'Primer Cuatrimestre',
            'description'   => 'Primer Cuatrimestre',
        ]);
        Grade_level::create([
            'name'          => 'Segundo Cuatrimestre',
            'description'   => 'Segundo Cuatrimestre',
        ]);
        Grade_level::create([
            'name'          => 'Tercer Cuatrimestre',
            'description'   => 'Tercer Cuatrimestre',
        ]);
        Grade_level::create([
            'name'          => 'Cuarto Cuatrimestre',
            'description'   => 'Cuarto Cuatrimestre',
        ]);
        Grade_level::create([
            'name'          => 'Quinto Cuatrimestre',
            'description'   => 'Quinto Cuatrimestre',
        ]);
        Grade_level::create([
            'name'          => 'Sexto Cuatrimestre',
            'description'   => 'Sexto Cuatrimestre',
        ]);
        Grade_level::create([
            'name'          => 'Septimo Cuatrimestre',
            'description'   => 'Septimo Cuatrimestre',
        ]);
        Grade_level::create([
            'name'          => 'Octavo Cuatrimestre',
            'description'   => 'Octavo Cuatrimestre',
        ]);
        Grade_level::create([
            'name'          => 'Noveno Cuatrimestre',
            'description'   => 'Noveno Cuatrimestre',
        ]);
        Grade_level::create([
            'name'          => 'Decimo Cuatrimestre',
            'description'   => 'Decimo Cuatrimestre',
        ]);
        Grade_level::create([
            'name'          => 'Onceavo Cuatrimestre',
            'description'   => 'Onceavo Cuatrimestre',
        ]);
        Grade_level::create([
            'name'          => 'Doceavo Cuatrimestre',
            'description'   => 'Doceavo Cuatrimestre',
        ]);
    }
}
