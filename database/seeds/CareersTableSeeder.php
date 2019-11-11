<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Career;


class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::create([
            'name'              => 'Ingenieria en Sistemas C.',
            'agreementNumber'   => '20110756',
            'start_date'        => Carbon::parse('2011-08-16')
        ]);

        Career::create([
            'name'              => 'Nutrición',
            'agreementNumber'   => '20121941',
            'start_date'        => Carbon::parse('2012-09-21')
        ]);

        Career::create([
            'name'              => 'Administración',
            'agreementNumber'   => '2002047',
            'start_date'        => Carbon::parse('2000-03-17')
        ]);

        Career::create([
            'name'              => 'Mercadotecnia',
            'agreementNumber'   => '2007145',
            'start_date'        => Carbon::parse('2017-02-19')
        ]);
    }
}
