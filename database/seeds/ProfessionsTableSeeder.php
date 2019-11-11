<?php

use Illuminate\Database\Seeder;
use App\Profession;

class ProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $profession = new Profession();
        $profession->name = 'Informática';
        $profession->save();

        $profession = new Profession();
        $profession->name = 'Ingeniería en Sistemas C';
        $profession->save();

        $profession = new Profession();
        $profession->name = 'Psicólogia';
        $profession->save();

        $profession = new Profession();
        $profession->name = 'Contaduría';
        $profession->save();

        $profession = new Profession();
        $profession->name = 'Derecho';
        $profession->save();
    }
}
