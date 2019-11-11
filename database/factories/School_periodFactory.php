<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\School_period;
use Faker\Generator as Faker;

$factory->define(School_period::class, function (Faker $faker) {
    return [
        'description' => $faker->randomElement(['ENERO-ABRIL', 'MAYO-SEPTIEMBRE', 'AGOSTO-DICIEMBRE']),
        'year'        => $faker->randomElement(['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020']),
    ];
});
