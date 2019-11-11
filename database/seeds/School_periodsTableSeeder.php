<?php

use Illuminate\Database\Seeder;
use App\School_period;

class School_periodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        School_period::create([
            'description' => 'SEPTIEMBRE-DICIEMBRE',
            'year' => '2015',
        ]);

        School_period::create([
            'description' => 'ENERO-ABRIL',
            'year' => '2016',
        ]);

        School_period::create([
            'description' => 'MAYO-AGOSTO',
            'year' => '2016',
        ]);

        School_period::create([
            'description' => 'SEPTIEMBRE-DICIEMBRE',
            'year' => '2016',
        ]);

//        2017

        School_period::create([
            'description' => 'ENERO-ABRIL',
            'year' => '2017',
        ]);

        School_period::create([
            'description' => 'MAYO-AGOSTO',
            'year' => '2017',
        ]);

        School_period::create([
            'description' => 'SEPTIEMBRE-DICIEMBRE',
            'year' => '2017',
        ]);

        //        2018

        School_period::create([
            'description' => 'ENERO-ABRIL',
            'year' => '2018',
        ]);

        School_period::create([
            'description' => 'MAYO-AGOSTO',
            'year' => '2018',
        ]);

        School_period::create([
            'description' => 'SEPTIEMBRE-DICIEMBRE',
            'year' => '2018',
        ]);


        //        2019

        School_period::create([
            'description' => 'ENERO-ABRIL',
            'year' => '2019',
        ]);

        School_period::create([
            'description' => 'MAYO-AGOSTO',
            'year' => '2019',
        ]);

        School_period::create([
            'description' => 'SEPTIEMBRE-DICIEMBRE',
            'year' => '2019',
        ]);
    }
}
